<?php 
    // Definir el espacio de nombres para evitar colisiones de nombres y organizar el código
    namespace Controller;

    // Clase CatalogoControlador que hereda de la clase Controlador
    class CatalogoControlador extends Controlador {

        // Método que carga la vista del catálogo
        public function Catalogo() {
            $this->CargarVista("Catalogo/catalogo"); // Carga la vista "Catalogo/catalogo"
        }

        // Método que carga la vista de la compra
        public function Compra() {
            // Se deja comentada una línea que probablemente recupera productos por su ID
            //$datos = $this->productsModel->getIdProducts($id);
            
            // Carga la vista "Catalogo/compra"
            $this->CargarVista("Catalogo/compra");
        }
    }

