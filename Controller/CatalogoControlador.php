<?php 
    namespace Controller ;

    class CatalogoControlador extends Controlador{
        public function Catalogo(){
            $this->CargarVista("Catalogo/catalogo");
        }

        public function Compra(){
            $this->CargarVista("Catalogo/compra");
        }
        
    }