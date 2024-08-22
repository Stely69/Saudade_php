<?php 
    namespace Controller;

    class InicioControlador  extends Controlador{
        public function inicio(){
            $this->cargarVista("inicio");
        }
    }