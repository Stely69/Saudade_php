<?php 
    namespace Controller;

    class Controlador{
        public function cargarVista($nomAchivo,$datos=[]){
            //extract($datos);
            require_once"../Public/Views/{$nomAchivo}.php";
        }
    }