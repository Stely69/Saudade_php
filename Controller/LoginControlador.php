<?php

    namespace   Controller;

    class LoginControlador extends Controlador{
        public function login(){
            $this->cargarVista("Login/inicio_sesion");
        }

        public function loginaction(){
            $this->cargarVista("Login/LoginAction");
        }

        public function registeraction(){
            $this->cargarVista("Login/RegisterAction");
        }
        public function registro(){
            $this->cargarVista("Login/registro");
        }
    }