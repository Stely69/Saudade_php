<?php
    include_once '../Controller/AuthController.php'; // Incluye el controlador de autenticación

    // Crea una instancia del controlador de autenticación
    $authController = new AuthController();
    $authController->login($_POST['email'], $_POST['password']);
    // Inicia la sesión para gestionar las variables de sesión
    session_start();