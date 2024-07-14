<?php
class Database {
    private $host = "localhost"; //127.0.0.1:33065 
    private $db_name = "tienda_online"; // Nombre de tu base de datos
    private $username = "root"; // Tu usuario de la base de datos
    private $password = ""; // Tu contraseña de la base de datos
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
