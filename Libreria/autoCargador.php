<?php 
    spl_autoload_register(function ($class) {
        $rutasArchivo = "../".str_replace("\\","/", $class).".php";
        //echo $rutasArchivo ."<br>";
        if (file_exists($rutasArchivo))
        require $rutasArchivo;
        else echo"No se puede cargar la clase";
    });