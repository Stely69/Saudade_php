<?php 
    include_once '../Config/Database.php';

    class RolesModel {
        private $conn ;

        private $table_name = "roles";

        public function __construct(){
            $DataBase = new Database();
            $this->conn = $DataBase->getConnection();
        }

        public function getRoleIdByName($name) {
            $query = $this->conn->prepare("SELECT id FROM roles WHERE role_name = :name");
            $query->bindParam(':name', $name);
            $query->execute();
            return $query->fetchColumn();
        }
        public function getRoleById($id) {
            $query = $this->conn->prepare("SELECT * FROM roles WHERE id = :id");
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }

    }