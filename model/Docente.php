<?php
    Class Docente{
        //ATRIBUTOS
        private String $primerNombre;
        private String $segundoNombre;
        private String $primerApellido;
        private String $segundoApellido;
        private String $edad;

        //METODOS
        //CONSTRUCTORES
        public function __construct($primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $edad){
            $this->primerNombre=$primerNombre;
            $this->segundoNombre=$segundoNombre;
            $this->primerApellido=$primerApellido;
            $this->segundoApellido=$segundoApellido;
            $this->edad=$edad;
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
        public function getEdad(){
            return $this->edad;
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
        public function setEdad($edad){
            $this->edad=$edad;
        }
    }
?>