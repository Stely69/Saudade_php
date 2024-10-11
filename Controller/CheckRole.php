<?php
    include_once '../Models/RolesModel.php';

    function checkRole($requiredRole) {
        // Iniciar la sesión, si no está ya iniciada
        session_start();

        // Verifica si la sesión tiene un 'role_id'. Si no, redirige al inicio de sesión.
        if (!isset($_SESSION['role_id'])) {
            header('Location: ../Login/inicio_sesion.php');
            exit();
        }
        
        // Instancia de la clase RolesModel para consultar la base de datos
        $roles_db = new RolesModel();
        
        // Obtener los datos del rol desde la base de datos usando el 'role_id' almacenado en la sesión
        $roleData = $roles_db->getRoleById($_SESSION['role_id']);

        // Si no se encuentra un rol con el 'role_id' en la base de datos
        if ($roleData === false) {
            // Redirige a una página de error 404
            header('Location: ../404/error404?error=No tienes un rol');
            exit();
        }
        
        // Extraer el nombre del rol
        $role = $roleData['role_name'];

        // Compara el rol obtenido con el rol requerido
        if ($role !== $requiredRole) {
            // Si no coincide, redirige al usuario a la página principal
            header('Location: ../');
            exit();
        }
    }

