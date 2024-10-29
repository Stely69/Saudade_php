<?php  
   require_once '../Controller/ProductController.php';
   require_once '../Controller/CheckRole.php';
    // Verifica el rol del usuario
    checkRole('vendedor');

    if(isset($_GET['id'])){
        $prodctosController = new ProductController();
        $prodctosController->updateProduct($_GET['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'],$_POST['cantidad']);

    }
