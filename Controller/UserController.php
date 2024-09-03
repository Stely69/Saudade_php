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

        $role = $this->rolModel->getRoleIdByName('user');
        $role_id = $role['id'];

        $telefono = null ;
        $direccion_id = null;

        if($this->userModel->usuarioExiste($email)){
            header('Location: ../Login/registro?error=El correo electrónico ya está en uso. Por favor, elige otro.');
            exit();
        }

        if($this->userModel->createuser($username,$email,$telefono,$password,$role_id,$direccion_id)){
            header('Location: ../');
            exit();
        }else{
            header('Location: ../Login/registro?error=Hubo un error al registrar el usuario.');
            exit();
        }
        
    }
}

