<?php
include_once '../Controller/UserController.php';

$userController = new UserController();
$userController->register($_POST['username'], $_POST['email'], $_POST['password']);

?>
