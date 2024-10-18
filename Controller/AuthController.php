<?php
    // Se incluye el modelo de usuarios
    include_once '../Models/UserModel.php';

    // Definición de la clase AuthController
    class AuthController {
        private $userModel; // Propiedad para manejar el modelo de usuario

        // Constructor que inicializa el modelo de usuarios
        public function __construct() {
            $this->userModel = new UserModel(); // Se instancia el modelo UserModel
        }

        // Método para iniciar sesión
        public function login($email, $password) {
            // Obtener usuario por email
            $user = $this->userModel->getEmail($email);
        
            // Si el usuario no existe
            if (!$user) {
                // Redirigir al inicio de sesión con un mensaje de error específico para el email
                header('Location: ../Login/inicio_sesion?error=Email no encontrado');
                exit();
            }
        
            // Si el usuario existe pero la contraseña es incorrecta
            if (!password_verify($password, $user['password'])) {
                // Redirigir al inicio de sesión con un mensaje de error específico para la contraseña
                header('Location: ../Login/inicio_sesion?error=Contraseña incorrecta');
                exit();
            }
        
            // Si el usuario y la contraseña son correctos
            session_start(); // Iniciar sesión
        
            // Guardar los datos del usuario en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role_id'] = $user['role_id'];
        
            // Redirigir a la página principal
            header("Location: ../inicio");
            exit();
        }

        // Método para cerrar sesión
        public function logout() {
            session_start(); // Se inicia o retoma la sesión
            session_destroy(); // Se destruye la sesión

            // Redirige al usuario a la página principal después de cerrar la sesión
            header("Location: ../inicio");
        }
    }

