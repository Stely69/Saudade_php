<?php

    namespace Controller;

    class LoginControlador extends Controlador {
        // Método para cargar la vista de inicio de sesión
        public function login() {
            $this->cargarVista("Login/inicio_sesion");
        }

        // Método para cargar la vista de la acción de inicio de sesión
        public function loginaction() {
            $this->cargarVista("Login/LoginAction");
        }

        // Método para cargar la vista de la acción de cierre de sesión
        public function logout() {
            $this->cargarVista("Login/LogoutAction");
        }

        // Método para cargar la vista de la acción de registro
        public function registeraction() {
            $this->cargarVista("Login/RegisterAction");
        }

        // Método para cargar la vista de registro
        public function registro() {
            $this->cargarVista("Login/registro");
        }
    }
