<?php
include_once '../models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        include_once '../views/user_list.php';
    }

    public function register($username, $email, $password, $role) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $this->userModel->createUser($username, $email, $hashed_password, $role);
        header("Location: ../public/index.php");
    }
}
?>
