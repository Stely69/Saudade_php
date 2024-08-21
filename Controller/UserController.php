<?php
include_once '../Models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        include_once '';
    }

    public function register($username, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $role = "user"; // Establece el rol como "user"
        $this->userModel->createUser($username, $email, $hashed_password, $role);
        include_once("../Public/");
    }
}

