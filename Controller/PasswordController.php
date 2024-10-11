<?php
    include_once '../Models/UserModel.php';

    class PasswordController {
        private $userModel;

        public function __construct() {
            $this->userModel = new UserModel();
        }

        public function sendPasswordReset($email) {
            // Este método se encargará de enviar un correo para restablecer la contraseña
        }
    }
