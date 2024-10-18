<?php
namespace Controller;

class CargaControlador extends Controlador {
    // Método para cargar la vista de loader
    public function loader() {
        // Solo pasamos la subcarpeta y el nombre del archivo dentro de la carpeta Views
        $this->cargarVista("carga/loader");
    }
}