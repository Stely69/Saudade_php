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
            // Se obtiene el usuario por su email usando el modelo
            $user = $this->userModel->getEmail($email);

            // Se verifica que el usuario exista y que la contraseña proporcionada sea correcta
            if ($user && password_verify($password, $user['password'])) {
                session_start(); // Se inicia la sesión
                
                // Se guardan los datos del usuario en la sesión
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role_id'] = $user['role_id'];

                // Redirige a la página principal después de iniciar sesión correctamente
                header("Location: ../");
                exit();
            } else {
                // Si el email o la contraseña son incorrectos, redirige a la página de inicio de sesión con un mensaje de error
                header('Location: ../Login/inicio_sesion?error=Email o contraseña incorrectos');
                exit();
            }
        }

        // Método para cerrar sesión
        public function logout() {
            session_start(); // Se inicia o retoma la sesión
            session_destroy(); // Se destruye la sesión

            // Redirige al usuario a la página principal después de cerrar la sesión
            header("Location: ../");
        }
    }

