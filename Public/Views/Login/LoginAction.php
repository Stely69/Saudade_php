<?php
    include_once '../Controller/AuthController.php';

    $authController = new AuthController();
    $authController->login($_POST['email'], $_POST['password']);

    session_start();