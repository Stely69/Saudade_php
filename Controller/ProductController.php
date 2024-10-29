<?php
    include_once '../Models/ProductModel.php';

    class ProductController {
        private $productModel;

        public function __construct() {
            $this->productModel = new ProductModel();
        }

        public function create($name, $descripcion, $precio, $cantidad, $imagen, $tallas) {
            $tmpImagen = $imagen['tmp_name'];
            $uploadDir = '../uploads/';
            $imagenNombre = basename($imagen['name']);
            $rutaImagen = $uploadDir . $imagenNombre;

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true); // Crear la carpeta si no existe
            }
        
            if (move_uploaded_file($tmpImagen, $rutaImagen)) {
                if ($this->productModel->createProductWithTallas($name, $descripcion, $precio, $cantidad, $rutaImagen, $tallas)) {
                    header('Location: ../Vendedor/vendedordashboard?error=Hubo problemas para agregar el producto');
                    exit();
                } else {
                    header('Location: ../Vendedor/vendedordashboard?exito=Se agrego con exito');
                    exit();
                }
            } else {
                header('Location: ../Vendedor/vendedordashboard?error=Error al subir la imagen');
                exit();
            }
        }

        public function getProductAll() {
            return $this->productModel->getAllProducts();
        }

        public function getProductById($id) {
            return $this->productModel->getProductById($id);
        }
        
        public function updateProduct($producto_id, $nombre, $descripcion, $precio, $cantidad ) {
        
            // Actualizar el producto en la base de datos
            if($this->productModel->updateProduct($producto_id, $nombre, $descripcion, $precio, $cantidad,)){
                header('Location: ../Vendedor/vendedordashboard?error=Hubo Problemas al Actualizar Correctamente');
                exit();
            }else{
                header('Location: ../Vendedor/vendedordashboard?exito=Se Actualizo Correctamente');
                exit();
            }
            // Redirigir a la lista de productos
           
        }
        
        public function getProductos(){
            $producto = $this->productModel->getAllProducts();

            if ($producto){
                echo json_encode($producto);
            }else{
                echo json_encode([]);
            }

        }

        public function deleteProduct($productID) {
            if($this->productModel->deleteProduct($productID)){
                header('Location: ../Vendedor/vendedordashboard?error=Hubo Problemas al Eliminar');
                exit();
            }else {
                header('Location: ../Vendedor/vendedordashboard?exito=Se Elimino Correctamente');
                exit();
            }

        }

    }
