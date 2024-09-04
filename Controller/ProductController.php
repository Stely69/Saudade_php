<<<<<<< HEAD
<?php
include_once '../Models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function index() {
        $products = $this->productModel->getProducts();
        include_once '../Views/product_list.php';
    }

    public function create($name, $description, $price, $image, $seller_id) {
        $this->productModel->createProduct($name, $description, $price, $image, $seller_id);
        header("Location: ../Public/index.php");
    }
}
=======
<?php
include_once '../Models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function index() {
        $products = $this->productModel->getProducts();
        include_once '../Views/product_list.php';
    }

    public function create($name, $description, $price, $image, $seller_id) {
        $this->productModel->createProduct($name, $description, $price, $image, $seller_id);
        header("Location: ../Public/index.php");
    }
}
>>>>>>> v-2.0-stiwi
