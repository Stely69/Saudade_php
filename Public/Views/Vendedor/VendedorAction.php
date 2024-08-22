<?php 
    require_once '../Controller/ProductController.php';

    $crearproducto = new ProductController();
    $crearproducto->create($_POST['name'],$_POST['description'],$_POST['price'],$_POST['image'],$_POST['seller_id']);