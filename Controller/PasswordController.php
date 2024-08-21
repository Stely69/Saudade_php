<?php
include_once '../Models/UserModel.php';

class PasswordController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function sendPasswordReset($email) {
        $user = $this->userModel->getUserByEmail($email);

        if ($user) {
            $token = bin2hex(random_bytes(50)); // Genera un token único
            $this->userModel->savePasswordResetToken($user['id'], $token);

            $resetLink = "http://yourdomain.com/public/reset_password.php?token=$token";
            $subject = "Recuperación de contraseña";
            $message = "Haga clic en el siguiente enlace para restablecer su contraseña: $resetLink";
            $headers = "From: no-reply@yourdomain.com";

            mail($email, $subject, $message, $headers);
            echo "Se ha enviado un enlace de recuperación a su correo electrónico.";
        } else {
            echo "No se encontró una cuenta con ese correo electrónico.";
        }
    }

    public function resetPassword($token, $newPassword) {
        $userId = $this->userModel->getUserIdByToken($token);

        if ($userId) {
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $this->userModel->updatePassword($userId, $hashedPassword);
            $this->userModel->deletePasswordResetToken($userId);
            echo "Su contraseña ha sido actualizada exitosamente.";
        } else {
            echo "El enlace de restablecimiento de contraseña no es válido o ha expirado.";
        }
    }
}

