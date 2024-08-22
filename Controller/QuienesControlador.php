<?php 
    namespace Controller;

    class QuienesControlador extends Controlador{
        public function Quienes(){
            $this->CargarVista("QuieneSomos/quienessomos");
        }
    }