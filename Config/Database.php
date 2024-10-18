<?php
    // Definición de la clase Database para gestionar la conexión a una base de datos
    class Database {
        // Atributos privados para la configuración de la conexión a la base de datos
        private $host = "127.0.0.1:33065"; // Dirección del servidor de la base de datos (puede ser localhost o una IP)
        private $db_name = "saudade"; // Nombre de la base de datos a la que te conectarás
        private $username = "root"; // Usuario de la base de datos (por defecto 'root' en muchos sistemas locales)
        private $password = ""; // Contraseña para el usuario de la base de datos (en este caso está vacía)
        
        // Variable pública que contendrá la conexión a la base de datos
        public $conn;

        // Método que establece la conexión a la base de datos y la devuelve
        public function getConnection() {
            // Inicializa la conexión como null para evitar valores anteriores
            $this->conn = null;

            // Intenta conectarse a la base de datos usando un bloque try-catch
            try {
                // Crea una nueva conexión PDO usando los datos definidos arriba
                // La estructura del DSN (Data Source Name) especifica el host y la base de datos
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                
                // Establece que se utilice el conjunto de caracteres UTF-8 en las interacciones con la base de datos
                $this->conn->exec("set names utf8");
            } catch(PDOException $exception) {
                // Si hay un error al intentar conectarse, se captura aquí y se muestra el mensaje de error
                // En un entorno de producción, es mejor no mostrar errores detallados por razones de seguridad
                echo "Error de conexión: " . $exception->getMessage();
            }

            // Retorna la conexión, sea exitosa o no (en caso de error, será null)
            return $this->conn;
        }
    }

