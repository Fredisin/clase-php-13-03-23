<?php

    include '../../model/conexion.php';
    include '../../model/Docente.php';

    if($_POST){
        $docente = new Docente($_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'],$_POST['segundoApellido'],$_POST['edad']);
        $id_docente = $_POST['id_docente'];
        //CONSULTA A BD
        $sentencia = $con -> prepare("UPDATE docentes SET primer_nombre = ?, segundo_nombre = ?, primer_apellido = ?, segundo_apellido = ?, edad = ? WHERE id_docente = ?;");
        $resultado = $sentencia -> execute([$docente->getPrimerNombre(), $docente->getSegundoNombre(), $docente->getPrimerApellido(), $docente->getSegundoApellido(), $docente->getEdad(), $id_docente]);
        
        if($resultado == true){
            header('Location: ../../view/docentes/docentes.php');
        }else{
            echo "ERROR EN LA ACTUALIZACIÓN";
        }
    }

?>