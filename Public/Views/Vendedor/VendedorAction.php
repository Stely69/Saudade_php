<?php 
    require_once '../Controller/ProductController.php';
    require_once '../Controller/CheckRole.php';
    checkRole('vendedor');

   $crearproducto = new ProductController();
   $crearproducto->create($_POST['name'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad'], $_FILES['imagen'], $_POST['tallas']);
