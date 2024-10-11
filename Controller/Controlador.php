<?php 
    namespace Controller;

    class Controlador {
        // Método para cargar vistas
        public function cargarVista($nomAchivo, $datos = []) {
            // Extraer los datos del array asociativo (comentado)
            // extract($datos);

            // Iniciar el almacenamiento en búfer de salida (comentado)
            // ob_start();

            // Incluir el archivo de la vista
            require_once "../Public/Views/{$nomAchivo}.php";

            // Capturar y limpiar el contenido del búfer de salida (comentado)
            // $vistas = ob_get_clean();
            
            // Retornar la vista generada (comentado)
            // return $vistas;
        }
    }

