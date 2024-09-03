<?php

    include_once '../Models/RolesModel.php';
    function checkRole($requiredRole) {
        session_start();

        if (!isset($_SESSION['role_id'])) {
            header('Location: ../Login/inicio_sesion');
            exit();
        }
        
        $roles_db = new RolesModel();
        $roleData = $roles_db->getRoleById($_SESSION['role_id']);
        $role = $roleData['role_name'];
        
        if ($role || $role !== $requiredRole){
            header('Location: ../');
            exit();
        }
    }