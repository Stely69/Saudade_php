<?php
include_once '../Controller/PasswordController.php';

$passwordController = new PasswordController();
$passwordController->resetPassword($_POST['token'], $_POST['new_password']);
?>