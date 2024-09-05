<?php
include_once '../Models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function create($name, $descripcion, $precio, $cantidad,$imagen, $tallas) {
        $tmpImagen = $imagen['tmp_name'];
        $uploadDir = '../uploads/';
        $imagenNombre = basename($imagen['name']);

        $rutaImagen = $uploadDir . $imagenNombre;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Crear la carpeta si no existe
        }
    
        if (move_uploaded_file($tmpImagen, $rutaImagen)) {
            if ($this->productModel->createProductWithTallas($name, $descripcion, $precio, $cantidad, $rutaImagen, $tallas)) {
                header('Location: ../Vendedor/editor?error=Hubo problemas para agregar el producto');
                exit();
            } else {
                header('Location: ../Vendedor/editor?exito=Se agrego con exito');
                exit();
            }
        } else {
            header('Location: ../Vendedor/editor?error=Error al subir la imagen');
            exit();
        }
    }
    
}
