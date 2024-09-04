<?php 
    include_once '../Config/Database.php';

    class RolesModel {
        private $conn ;


        public function __construct(){
            $DataBase = new Database();
            $this->conn = $DataBase->getConnection();
        }

        public function getRoleById($id) {
            $query = $this->conn->prepare("SELECT * FROM roles WHERE id = :id");
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);  // Asegúrate de que 'role_name' esté en la tabla 'roles'
        }        

    }