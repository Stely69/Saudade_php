<?php
// Incluye el modelo de productos que contiene la lógica para interactuar con la base de datos
    include_once '../Models/ProductModel.php';

    // Establece el tipo de contenido de la respuesta como JSON
    header('Content-Type: application/json');

    // Crea una instancia del modelo de productos
    $productModel = new ProductModel();
    // Obtiene todos los productos de la base de datos
    $products = $productModel->getAllProducts();

    // Verifica si se encontraron productos
    if ($products) {
            // Convierte el array de productos a formato JSON y lo imprime
        echo json_encode($products);
    } else {
            // Devuelve un array vacío en formato JSON si no hay productos
        echo json_encode([]);
    }
