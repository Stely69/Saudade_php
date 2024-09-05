<?php 
    namespace Controller ;

    class CatalogoControlador extends Controlador{

        public function Catalogo(){
            $this->CargarVista("Catalogo/catalogo");
        }

        public function Compra(){
           // $datos = $this->productsModel->getIdProducts($id);
            $this->CargarVista("Catalogo/compra");
        }
        
    }