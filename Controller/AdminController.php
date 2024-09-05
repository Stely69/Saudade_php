<?php 
     namespace  Controller;

    class AdminController extends Controlador {

        public function Admin(){
            $this->cargarVista("Admin/admin");
        }

        public function Vendedor(){
            $this->cargarVista("Vendedor/editor");
        }

        public function vendedoraction(){
            $this->cargarVista("Vendedor/VendedorAction");
        }
        
    }