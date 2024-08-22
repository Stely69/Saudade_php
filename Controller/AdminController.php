<?php 
     namespace  Controller;

    class AdminController extends Controlador {

        public function Admin(){
            $this->cargarVista("Admin/admin");
        }
    }