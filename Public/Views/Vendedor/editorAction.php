<?php
    include_once '../Controller/ProductController.php'; // Incluye el controlador de autenticación
    require_once '../Controller/CheckRole.php';
    // Verifica el rol del usuario
    checkRole('vendedor');
    // Crea una instancia del controlador de autenticación
    $productController = new ProductController();
    $productController->updateProduct($_POST['producto_id'],$_POST['name_producto'],$_POST['descripcion'],$_POST['precio'],$_POST['cantidad'],$_FILES['imagen'],$_POST['tallas']);
    // Inicia la sesión para gestionar las variables de sesión