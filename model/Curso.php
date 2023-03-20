<?php
    Class Curso{
        //ATRIBUTOS
        private String $nombreCurso;
        private String $lugarCurso;
        private String $id_docente;

        //METODOS
        //CONSTRUCTORES
        public function __construct($nombreCurso, $lugarCurso, $id_docente){
            $this->nombreCurso=$nombreCurso;
            $this->lugarCurso=$lugarCurso;
            $this->id_docente=$id_docente;
        }

        //GETTER AND SETTER
        public function getNombreCurso(){
            return $this->nombreCurso;
        } 
        public function getLugarCurso(){
            return $this->lugarCurso;
        } 
        public function getIdDocente(){
            return $this->id_docente;
        } 

        public function setNombreCurso($nombreCurso){
            $this->nombreCurso=$nombreCurso;
        }
        public function setLugarCurso($lugarCurso){
            $this->lugarCurso=$lugarCurso;
        }
        public function setIdDocente($id_docente){
            $this->id_docente=$id_docente;
        }
    }
?>