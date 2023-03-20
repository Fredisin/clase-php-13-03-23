<?php

    include '../../model/conexion.php';
    include '../../model/Curso.php';

    if($_POST){
        $curso = new Curso($_POST['nombreCurso'], $_POST['lugarCurso'], $_POST['id_docente']);
        $id = $_POST['id'];
        //CONSULTA A BD
        $sentencia = $con -> prepare("UPDATE cursos SET nombreCurso = ?, lugarCurso = ?, id_docente = ? WHERE id = ?");
        $resultado = $sentencia -> execute([$curso->getNombreCurso(), $curso->getLugarCurso(), $curso->getIdDocente(), $id]);
        
        if($resultado == true){
            header('Location: ../../view/cursos/cursos.php');
        }else{
            echo "ERROR EN LA ACTUALIZACIÓN";
        }
    }

?>