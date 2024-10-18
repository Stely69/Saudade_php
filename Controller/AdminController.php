<?php 
    // Definición del espacio de nombres para organizar mejor las clases
    namespace Controller;

    // Definición de la clase AdminController que extiende de una clase base llamada Controlador
    class AdminController extends Controlador {

        // Método para cargar la vista del administrador
        public function Admin() {
            $this->cargarVista("Admin/admin"); // Carga la vista ubicada en "Admin/admin"
        }

        // Método para cargar la vista del dashboard del vendedor
        public function Vendedor() {
            $this->cargarVista("Vendedor/vendedordashboard"); // Carga la vista ubicada en "Vendedor/vendedordashboard"
        }

        // Método para cargar una vista específica para acciones del vendedor
        public function vendedoraction() {
            $this->cargarVista("Vendedor/VendedorAction"); // Carga la vista ubicada en "Vendedor/VendedorAction"
        }

        // Método para cargar una vista del editor del vendedor
        public function editor() {
            $this->cargarVista("Vendedor/editor"); // Carga la vista ubicada en "Vendedor/editor"
        }
        
        public function Usuario(){
            $this->cargarVista("Admin/usuarios");
        }
    }

