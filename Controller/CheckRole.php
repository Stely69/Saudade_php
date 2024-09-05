<?php
include_once '../Models/RolesModel.php';

function checkRole($requiredRole) {
    session_start();

    if (!isset($_SESSION['role_id'])) {
        header('Location: ../Login/inicio_sesion.php');
        exit();
    }
    
    $roles_db = new RolesModel();
    $roleData = $roles_db->getRoleById($_SESSION['role_id']);

    if ($roleData === false) {
        // Si no se encuentra un rol, redirige al inicio
        header('Location: ../404/error404?error=No tienes un rol');
        exit();
    }
    
    $role = $roleData['role_name'];

    // Verifica si el rol es diferente al requerido
    if ($role !== $requiredRole) {
        header('Location: ../');
        exit();
    }
}

