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

        public function getProductAll() {
            return $this->productModel->getAllProducts();
        }

        public function getProductById($id) {
            return $this->productModel->getProductById($id);
        }
        
        public function updateProduct() {
            // Obtener los datos del formulario
            $producto_id = $_POST['producto_id'];
            $nombre = $_POST['name_producto'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $tallas = $_POST['tallas'];
        
            // Imagen (si fue subida una nueva)
            if (!empty($_FILES['imagen']['name'])) {
                $imagen = $this->uploadImage($_FILES['imagen']);
            } else {
                // Si no se subió una imagen, usar la actual
                $producto = $this->getProductById($producto_id);
                $imagen = $producto['imagen'];
            }
        
            // Actualizar el producto en la base de datos
            $this->productModel->updateProduct($producto_id, $nombre, $descripcion, $precio, $cantidad, $imagen, $tallas);
        
            // Redirigir a la lista de productos
            header('Location: /productos');
        }
        
        private function uploadImage($imageFile) {
            // Lógica para subir la imagen
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($imageFile["name"]);
            move_uploaded_file($imageFile["tmp_name"], $target_file);
            return $target_file;
        }

        public function getTallasAvailable() {
            $this->productModel->getAvailableTallas();
        }

        public function getTallasProductId($productId) {
            $this->productModel->getProductTallas($productId);
        }

    }
