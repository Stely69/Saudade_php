<?php
    include_once '../Models/UserModel.php';
    include_once '../Models/RolesModel.php';

    class UserController {
        private $userModel;
        private $rolModel;

        public function __construct() {
            $this->userModel = new UserModel();
            $this->rolModel = new RolesModel();
        }

        public function register($username, $email, $password) {
            session_start(); // Iniciar sesión para manejar mensajes de error

            // Validación de correo electrónico
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = 'El correo electrónico no es válido.';
                header('Location: ../Login/registro');
                exit();
            }

            $role_id = 3; // Rol predeterminado
            $direccion_id = null; // Asignar dirección como nula

            // Verificar si el usuario ya existe
            if ($this->userModel->usuarioExiste($email)) {
                $_SESSION['error'] = 'El correo electrónico ya está en uso. Por favor, elige otro.';
                header('Location: ../Login/registro');
                exit();
            }

            // Crear el usuario
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hashear la contraseña
            if ($this->userModel->createuser($username, $email, $hashedPassword, $role_id, $direccion_id)) {
                header('Location: ../');
                exit();
            } else {
                $_SESSION['error'] = 'Hubo un error al registrar el usuario.';
                header('Location: ../Login/registro');
                exit();
            }
        }
        // Controlador - UserController.php
        public function getUserProfile($userId) {
            $userModel = new UserModel();
            return $userModel->getUserById($userId);
        }
        
    }
