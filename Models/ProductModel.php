<?php
include_once '../Config/Database.php';

class ProductModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function createProductWithTallas($name, $descripcion, $precio, $cantidad,$imagen, $tallas) {
        $query = "INSERT INTO productos (nombre, descripcion, precio,cantidad, imagen) VALUES (:nombre, :descripcion, :precio,:cantidad, :imagen)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre', $name);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':imagen', $imagen);

        if ($stmt->execute()) {
            $producto_id = $this->conn->lastInsertId();

            foreach ($tallas as $talla_id) {
                $query = "INSERT INTO producto_tallas (producto_id, talla_id) VALUES (:producto_id, :talla_id)";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':producto_id', $producto_id);
                $stmt->bindParam(':talla_id', $talla_id);
                $stmt->execute();
            }
        }
    }

    public function getAllProducts() {
        $query = "SELECT * FROM productos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}

