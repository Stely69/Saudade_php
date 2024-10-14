<?php
include_once '../Controller/AuthController.php';// Incluye el controlador de autenticación

$authController = new AuthController();// Crea una instancia del controlador de autenticación
// Llama al método de cierre de sesión del controlador
$authController->logout();
