<?php
// Incluye el modelo de productos que contiene la lógica para interactuar con la base de datos
    include_once '../Models/UserModel.php';

    // Establece el tipo de contenido de la respuesta como JSON
    header('Content-Type: application/json');

    // Crea una instancia del modelo de productos
    $productModel = new UserModel();
    // Obtiene todos los productos de la base de datos
    $usuarios = $productModel->getAllUsers();

    // Verifica si se encontraron productos
    if (!$usuarios) {
        echo json_encode([]); // Si no hay usuarios, devuelve un array vacío
        exit; // Asegúrate de salir para evitar que se envíen datos adicionales
    }
    
        echo json_encode($usuarios); // Devuelve la lista de usuarios como JSON