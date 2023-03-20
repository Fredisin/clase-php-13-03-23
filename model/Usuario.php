<?php
    Class Usuario{
        //ATRIBUTOS
        private String $primerNombre;
        private String $segundoNombre;
        private String $primerApellido;
        private String $segundoApellido;
        private String $email;
        private String $contrasena;

        //METODOS
        //CONSTRUCTORES
        public function __construct($primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $email, $contrasena){
            $this->primerNombre=$primerNombre;
            $this->segundoNombre=$segundoNombre;
            $this->primerApellido=$primerApellido;
            $this->segundoApellido=$segundoApellido;
            $this->email=$email;
            $this->contrasena=$contrasena;
        }

        //GETTER AND SETTER
        public function getPrimerNombre(){
            return $this->primerNombre;
        } 
        public function getSegundoNombre(){
            return $this->segundoNombre;
        } 
        public function getPrimerApellido(){
            return $this->primerApellido;
        } 
        public function getSegundoApellido(){
            return $this->segundoApellido;
        } 
        public function getEmail(){
            return $this->email;
        } 
        public function getContrasena(){
            return $this->contrasena;
        } 

        public function setPrimerNombre($primerNombre){
            $this->primerNombre=$primerNombre;
        }
        public function setSegundoNombre($segundoNombre){
            $this->segundoNombre=$segundoNombre;
        }
        public function setPrimerApellido($primerApellido){
            $this->primerApellido=$primerApellido;
        }
        public function setSegundoApellido($segundoApellido){
            $this->segundoApellido=$segundoApellido;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setContrasena($contrasena){
            $this->contrasena=$contrasena;
        }
    }
?>