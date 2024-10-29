<?php 
    require_once '../Controller/ProductController.php';

    if(isset($_GET['id'])){
        $prodctosController = new ProductController();
        $prodctosController->deleteProduct($_GET['id']);

    }

    header('Location: vendedordashboard');
    exit;