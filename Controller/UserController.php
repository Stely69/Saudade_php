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
                header('Location: ../Login/registro?error=El correo electrónico ya está en uso. Por favor, elige otro.');
                exit();
            }

            // Crear el usuario

            //$hashed_Password = password_hash($password, PASSWORD_BCRYPT);

            if ($this->userModel->createuser($username, $email, $password, $role_id, $direccion_id)) {
                header('Location: ../');
                exit();
            } else {
                header('Location: ../Login/registro?error=Hubo un error al registrar el usuario.');
                exit();
            }
        }
        // Controlador - UserController.php
        public function getUserProfile($userId) {
            $userModel = new UserModel();
            return $userModel->getUserById($userId);
        }
        
    }
