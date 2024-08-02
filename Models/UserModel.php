<?php
include_once 'Database.php';

class UserModel {
    private $conn;
    private $table_name = "users";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getUsers() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail($email) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($username, $email, $password, $role) {
        $query = "INSERT INTO " . $this->table_name . " (username, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->bindParam(4, $role);
        return $stmt->execute();
    }

    public function savePasswordResetToken($userId, $token) {
        $query = "INSERT INTO password_resets (user_id, token) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $userId);
        $stmt->bindParam(2, $token);
        return $stmt->execute();
    }

    public function getUserIdByToken($token) {
        $query = "SELECT user_id FROM password_resets WHERE token = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $token);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['user_id'] : null;
    }

    public function updatePassword($userId, $hashedPassword) {
        $query = "UPDATE " . $this->table_name . " SET password = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $hashedPassword);
        $stmt->bindParam(2, $userId);
        return $stmt->execute();
    }

    public function deletePasswordResetToken($userId) {
        $query = "DELETE FROM password_resets WHERE user_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $userId);
        return $stmt->execute();
    }
}
?>
