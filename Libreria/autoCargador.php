<?php 
    spl_autoload_register(function ($class) {
        // Construir la ruta del archivo
        $rutasArchivo = "../" . str_replace("\\", "/", $class) . ".php";
        
        // Verificar si el archivo existe
        if (file_exists($rutasArchivo)) {
            require $rutasArchivo;
        } else {
            // Manejar el error lanzando una excepción
            throw new Exception("No se puede cargar la clase: $class");
        }
    });
