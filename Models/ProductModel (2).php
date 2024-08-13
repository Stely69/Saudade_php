<?php
include_once 'Database.php';

class ProductModel {
    private $conn;
    private $table_name = "products";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getProducts() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $image, $seller_id) {
        $query = "INSERT INTO " . $this->table_name . " (name, description, price, image, seller_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $description);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $image);
        $stmt->bindParam(5, $seller_id);
        return $stmt->execute();
    }
}
?>
