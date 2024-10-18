<?php 
    namespace Controller;

    class InicioControlador extends Controlador {
        // Método para cargar la vista de inicio
        public function inicio() {
            $this->cargarVista("inicio");
        }
    }
