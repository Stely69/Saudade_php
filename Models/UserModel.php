
<?php
include_once '../Config/Database.php';

class UserModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    
    public function getEmail($email){
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function usuarioExiste($email) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn() > 0;
    }

    public function createuser($username, $email, $telefono, $password, $role_id, $direccion_id){
        $stmt = $this->conn->prepare("INSERT INTO usuarios (username, email, telefono, password, role_id, direccion_id) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$username, $email, $telefono, password_hash($password,PASSWORD_BCRYPT), $role_id, $direccion_id]);
    }

}

