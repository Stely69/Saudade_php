<?php 
    require_once '../Controller/ProductController.php';
    require_once '../Controller/CheckRole.php';
    // Verifica el rol del usuario
    checkRole('vendedor');
    //Se instancia el controlador 
   $crearproducto = new ProductController();
   $crearproducto->create($_POST['name'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad'], $_FILES['imagen'], $_POST['tallas']);
