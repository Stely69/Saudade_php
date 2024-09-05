<?php
header('Content-Type: application/json');

$response = ['status' => 'error'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = $email;
        $subject = '¡Nuevo Drop!';
        $messageBody = '¡Hola! Te informamos que hay un nuevo drop disponible. ¡No te lo pierdas!';
        $headers = "From: no-reply@tudominio.com\r\n";
        $headers .= "Reply-To: no-reply@tudominio.com\r\n";
        $headers .= "Content-type: text/html\r\n";

        if (mail($to, $subject, $messageBody, $headers)) {
            $response['status'] = 'success';
        }
    }
}

echo json_encode($response);
