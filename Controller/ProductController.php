<?php
include_once '../models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function index() {
        $products = $this->productModel->getProducts();
        include_once '../views/product_list.php';
    }

    public function create($name, $description, $price, $image, $seller_id) {
        $this->productModel->createProduct($name, $description, $price, $image, $seller_id);
        header("Location: ../public/index.php");
    }
}
?>