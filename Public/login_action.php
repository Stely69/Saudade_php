<?php
include_once '../controller/AuthController.php';

$authController = new AuthController();
$authController->login($_POST['email'], $_POST['password']);
?>
