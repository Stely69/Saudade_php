<?php
require_once '../Controller/config.php';

$client = getClient();

if (!isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $oauth2 = new Google_Service_Oauth2($client);
    $userData = $oauth2->userinfo->get();

    // Conexión a la base de datos
    $servername = "127.0.0.1:33065";
    $username = "root";
    $password = "";
    $dbname = "tienda_online";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar datos para inserción
    $googleUserId = $userData->getId();
    $userName = $userData->getName();
    $userEmail = $userData->getEmail();

    // Insertar en la tabla de usuarios_google (o la tabla que hayas creado)
    $sql = "INSERT INTO usuarios_google (google_id, nombre, correo) VALUES ('$googleUserId', '$userName', '$userEmail')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente en la base de datos.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>
