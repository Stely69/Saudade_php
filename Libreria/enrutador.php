<?php 
    namespace Libreria;

    class Enrutador {
        // Almacena las rutas registradas
        private static $rutas = [];

        // Método para registrar rutas de tipo GET
        public static function get($url, $llamarFuncion) {
            // Elimina espacios en blanco al inicio y al final de la URL
            $url = trim($url, "/");
            // Almacena la función a llamar para la ruta GET
            self::$rutas["GET"][$url] = $llamarFuncion;
        }

        // Método para registrar rutas de tipo POST
        public static function post($url, $llamarFuncion) {
            // Elimina espacios en blanco al inicio y al final de la URL
            $url = trim($url, "/");
            // Almacena la función a llamar para la ruta POST
            self::$rutas["POST"][$url] = $llamarFuncion;
        }

        // Método para obtener la ruta solicitada y ejecutar la función correspondiente
        public static function obtenerRuta() {
            // Obtiene el método HTTP de la solicitud
            $metodo = $_SERVER["REQUEST_METHOD"];
            // Obtiene la URI solicitada
            $uri = $_SERVER["REQUEST_URI"];
            // Encuentra la posición de la carpeta 'Public' en la URI
            $posicionPublic = strpos($uri, "Public");

            // Ajusta la URI para eliminar la parte de 'Public'
            $uri = trim(substr($uri, $posicionPublic + 6), "/");
            
            // Verifica si no hay rutas registradas para el método
            if (!isset(self::$rutas[$metodo])) {
                // Carga la vista de error 404 si no se encuentran rutas
                require_once("../Public/Views/404/error404.php");
                return;
            }

            // Itera sobre las rutas registradas para encontrar una coincidencia
            foreach (self::$rutas[$metodo] as $rutas => $funcionCall) {
                // Elimina espacios en blanco al inicio y al final de la URI
                $uri = trim($uri, "/");

                // Elimina la parte de la query string si existe
                if (strpos($uri, '?')) {
                    $uri = substr($uri, 0, strpos($uri, "?"));
                }

                // Convierte parámetros dinámicos en expresiones regulares
                if (strpos($rutas, ":")) {
                    $rutas = preg_replace("#:[a-zA-Z0-9]+#", "([a-zA-Z0-9]+)", $rutas);
                }

                // Comprueba si la URI coincide con la ruta registrada
                if (preg_match("%^$rutas$%", $uri, $coindiceRutaUri)) {
                    // Extrae las variables de la URI coincidente
                    $misVariablesUrl = array_slice($coindiceRutaUri, 1);
                    
                    // Verifica si la función es callable
                    if (is_callable($funcionCall)) {
                        // Llama a la función con las variables extraídas
                        $funcionCall(...$misVariablesUrl);
                    } else {
                        // Crea una instancia del controlador y llama al método correspondiente
                        $controlador = new $funcionCall[0];
                        $controlador->{$funcionCall[1]}(...$misVariablesUrl);
                    }
                    
                    return; // Sale del método después de ejecutar la función
                }  
            }

            // Si no se encuentra la ruta, carga la vista de error 404
            require_once("../Public/Views/404/error404.php");
        }
    }
