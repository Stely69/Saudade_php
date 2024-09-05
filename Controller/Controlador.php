<?php 
    namespace Controller;

    class Controlador{
        public function cargarVista($nomAchivo,$datos=[]){
            //extract($datos);
            //ob_start();
            require_once"../Public/Views/{$nomAchivo}.php";
            //$vistas = ob_get_clean();
            //return $vistas;
        }
    }