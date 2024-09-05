<?php
    include_once '../Models/ProductModel.php';

    header('Content-Type: application/json');

    $productModel = new ProductModel();
    $products = $productModel->getAllProducts();

    if ($products) {
        echo json_encode($products);
    } else {
        echo json_encode([]); // Devuelve un array vacío si no hay productos
    }
