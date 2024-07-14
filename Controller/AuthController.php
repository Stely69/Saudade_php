<?php
include_once '../Models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            include_once ("../Views/inicio_sesion/inicio2.php");
        } else {
            echo "Email o contraseña incorrectos.";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        include_once ("../Views/inicio.php");
    }
}
?>
