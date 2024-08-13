// public/forgot_password_action.php
<?php
include_once '../Controller/PasswordController.php';

$passwordController = new PasswordController();
$passwordController->sendPasswordReset($_POST['email']);
?>
