<?php
    // Se incluye la configuración de la base de datos
    include_once '../Config/Database.php';

    class ProductModel {
        private $conn; // Propiedad que contendrá la conexión a la base de datos

        // Constructor que establece la conexión a la base de datos
        public function __construct() {
            $database = new Database(); // Se instancia la clase Database
            $this->conn = $database->getConnection(); // Se obtiene la conexión a la base de datos
        }

        // Método para crear un producto y asociarle sus tallas
        public function createProductWithTallas($name, $descripcion, $precio, $cantidad, $imagen, $tallas) {
            // Consulta para insertar un nuevo producto en la tabla 'productos'
            $query = "INSERT INTO productos (nombre, descripcion, precio, cantidad, imagen) VALUES (:nombre, :descripcion, :precio, :cantidad, :imagen)";
            $stmt = $this->conn->prepare($query); // Se prepara la consulta

            // Se vinculan los valores de los parámetros con las variables
            $stmt->bindParam(':nombre', $name);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':cantidad', $cantidad);
            $stmt->bindParam(':imagen', $imagen);

            // Si la inserción del producto es exitosa
            if ($stmt->execute()) {
                // Se obtiene el último ID insertado para el producto
                $producto_id = $this->conn->lastInsertId();

                // Se itera a través de las tallas proporcionadas
                foreach ($tallas as $talla_id) {
                    // Consulta para insertar en la tabla de relación 'producto_tallas'
                    $query = "INSERT INTO producto_tallas (producto_id, talla_id) VALUES (:producto_id, :talla_id)";
                    $stmt = $this->conn->prepare($query); // Se prepara la consulta
                    // Se vinculan los parámetros con los valores de producto y talla
                    $stmt->bindParam(':producto_id', $producto_id);
                    $stmt->bindParam(':talla_id', $talla_id);
                    $stmt->execute(); // Se ejecuta la inserción
                }
            }
        }

        // Método para obtener todos los productos
        public function getAllProducts() {
            // Consulta para obtener todos los productos
            $query = "SELECT * FROM productos";
            $stmt = $this->conn->prepare($query); // Se prepara la consulta
            $stmt->execute(); // Se ejecuta la consulta
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Se retornan los resultados como un array asociativo
        }

        // Método para obtener un producto por su ID
        public function getProductById($id) {
            // Consulta para obtener un producto específico por ID
            $query = "SELECT * FROM productos WHERE id = :id";
            $stmt = $this->conn->prepare($query); // Se prepara la consulta
            $stmt->bindParam(':id', $id); // Se vincula el parámetro ID
            $stmt->execute(); // Se ejecuta la consulta
            return $stmt->fetch(PDO::FETCH_ASSOC); // Se retorna el producto encontrado
        }

        // Método para actualizar un producto y sus tallas
        public function updateProduct($id, $nombre, $descripcion, $precio, $cantidad, $imagen, $tallas) {
            // Consulta para actualizar los datos del producto
            $query = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio, cantidad = :cantidad, imagen = :imagen WHERE id = :id";
            $stmt = $this->conn->prepare($query); // Se prepara la consulta

            // Se vinculan los valores con los parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':cantidad', $cantidad);
            $stmt->bindParam(':imagen', $imagen);
            $stmt->bindParam(':id', $id);
            $stmt->execute(); // Se ejecuta la actualización
        
            // Primero se eliminan las tallas existentes del producto
            $queryDelete = "DELETE FROM producto_tallas WHERE producto_id = :producto_id";
            $stmtDelete = $this->conn->prepare($queryDelete); // Se prepara la consulta de eliminación
            $stmtDelete->bindParam(':producto_id', $id); // Se vincula el ID del producto
            $stmtDelete->execute(); // Se ejecuta la eliminación
        
            // Después, se insertan las nuevas tallas proporcionadas
            foreach ($tallas as $talla_id) {
                // Consulta para insertar en la tabla de relación 'producto_tallas'
                $queryInsert = "INSERT INTO producto_tallas (producto_id, talla_id) VALUES (:producto_id, :talla_id)";
                $stmtInsert = $this->conn->prepare($queryInsert); // Se prepara la consulta de inserción
                $stmtInsert->bindParam(':producto_id', $id); // Se vincula el ID del producto
                $stmtInsert->bindParam(':talla_id', $talla_id); // Se vincula el ID de la talla
                $stmtInsert->execute(); // Se ejecuta la inserción
            }
        }
        public function getAvailableTallas() {
            $query = "SELECT * FROM tallas"; // Ajusta la consulta si es necesario
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        // Obtener tallas de un producto específico
        public function getProductTallas($product_id) {
            $query = "SELECT talla_id FROM producto_tallas WHERE producto_id = :producto_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':producto_id', $product_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_COLUMN); // Retorna solo los IDs de las tallas
        }
    }

