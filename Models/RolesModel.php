<?php 
    // Se incluye la configuración de la base de datos
    include_once '../Config/Database.php';

    // Definición de la clase RolesModel para interactuar con la tabla 'roles'
    class RolesModel {
        private $conn; // Propiedad que contendrá la conexión a la base de datos

        // Constructor de la clase que establece la conexión a la base de datos
        public function __construct(){
            // Se crea una instancia de la clase Database para obtener la conexión
            $DataBase = new Database();
            $this->conn = $DataBase->getConnection(); // Se guarda la conexión en $conn
        }

        // Método para obtener un rol por su ID
        public function getRoleById($id) {
            // Se prepara la consulta para seleccionar un rol por su ID
            $query = $this->conn->prepare("SELECT * FROM roles WHERE id = :id");
            
            // Se vincula el valor del ID con el parámetro de la consulta
            $query->bindParam(':id', $id);
            
            // Se ejecuta la consulta
            $query->execute();
            
            // Se retorna el resultado como un array asociativo
            return $query->fetch(PDO::FETCH_ASSOC);
        }
    }
