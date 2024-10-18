<?php
// Se incluye la configuración de la base de datos
    include_once '../Config/Database.php';

    class UserModel {
        private $conn; // Propiedad que contendrá la conexión a la base de datos

        // Constructor que inicializa la conexión a la base de datos
        public function __construct() {
            $database = new Database(); // Instancia de la clase Database
            $this->conn = $database->getConnection(); // Se obtiene la conexión
        }

        // Método para obtener un usuario por su email
        public function getEmail($email){
            // Se prepara una consulta para seleccionar un usuario por su email
            $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stmt->execute([$email]); // Se ejecuta la consulta con el email proporcionado
            return $stmt->fetch(PDO::FETCH_ASSOC); // Se retorna el resultado como array asociativo
        }

        // Método para verificar si un usuario existe según su email
        public function usuarioExiste($email) {
            // Se prepara una consulta para contar los registros que coincidan con el email
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
            $stmt->execute([$email]); // Se ejecuta la consulta
            return $stmt->fetchColumn() > 0; // Si el resultado es mayor que 0, el usuario existe
        }

        // Método para crear un nuevo usuario
        public function createuser($username, $email, $password, $role_id, $direccion_id) {
            // Se prepara una consulta para insertar un nuevo usuario en la base de datos
            $stmt = $this->conn->prepare("INSERT INTO usuarios (username, email, password, role_id, direccion_id) VALUES (?, ?, ?, ?, ?)");
            
            // Se ejecuta la consulta con los valores proporcionados, incluyendo el hash de la contraseña
            return $stmt->execute([$username, $email, password_hash($password, PASSWORD_BCRYPT), $role_id, $direccion_id]);
        }

        // Modelo (UserModel.php)
        public function getAllUsers() {
            $query = "SELECT usuarios.id, usuarios.username, usuarios.email, roles.role_name
                      FROM usuarios
                      JOIN roles ON usuarios.role_id = roles.id"; // Ajusta según tus tablas y relaciones
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

        // Modelo (UserModel.php)
        public function updateUserRoleAndDate($userId, $newRoleId, $fechaAsignacion) {
            $query = "UPDATE users SET role_id = :role_id, fecha_asignacion = :fecha WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':role_id', $newRoleId);
            $stmt->bindParam(':fecha', $fechaAsignacion);
            $stmt->bindParam(':id', $userId);
            return $stmt->execute();
        }

    }
        
