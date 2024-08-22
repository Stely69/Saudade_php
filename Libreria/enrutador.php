<?php 
    namespace Libreria;
    
    class Enrutador{
        private  static $rutas = [];

        public static function get($url,$llamarFuncion){
            $url = trim($url, "/");
            self::$rutas["GET"][$url] = $llamarFuncion;
        }

        
        public static function post($url,$llamarFuncion){
            $url = trim($url, "/");
            self::$rutas["POST"][$url] = $llamarFuncion;
        }

        public static function obtenerRuta(){
            $metodo = $_SERVER["REQUEST_METHOD"];
            $uri = $_SERVER["REQUEST_URI"];
            $posicionPublic = strpos($uri,"Public");

            $uri = trim(substr($uri, $posicionPublic + 6),"/");
            foreach(self::$rutas[$metodo] as $rutas=> $funcionCall){
                $uri=trim($uri,"/");
                if(strpos($rutas,":")){
                    $rutas = preg_replace("#:[a-zA-Z0-9]+#","([a-zA-Z0-9]+)",$rutas);
                }

                if(preg_match("%^$rutas$%",$uri,$coindiceRutaUri)){
                    $misVariablesUrl = array_slice($coindiceRutaUri,1);
                    if(is_callable($funcionCall)){
                        $funcionCall(...$misVariablesUrl);
                    }else{
                        $controlador = new $funcionCall[0];
                        $controlador->{$funcionCall[1]}(...$misVariablesUrl); 
                    }

                    // echo(is_array($respuesta)|| is_object($respuesta)) ? json_encode($respuesta) : $respuesta;
                    return;
                }  
                
            }
            require_once ("../Public/Views/404/error404.php");
        }   
    }