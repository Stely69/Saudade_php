<?php
include_once '../Controller/UserController.php';// Incluye el controlador de usuario

$userController = new UserController();// Crea una instancia del controlador de usuario
$userController->register($_POST['username'], $_POST['email'], $_POST['password']);// Llama al método de registro y captura el resultado


