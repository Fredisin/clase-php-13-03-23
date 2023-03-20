<?php

    include '../../model/conexion.php';
    include '../../model/Docente.php';

    if($_POST){
        $docente = new Docente($_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'],$_POST['segundoApellido'],$_POST['edad']);

        //CONSULTA A BD
        $sentencia = $con -> prepare("INSERT INTO docentes (primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,edad) VALUES(?,?,?,?,?);");
        $resultado = $sentencia -> execute([$docente->getPrimerNombre(), $docente->getSegundoNombre(), $docente->getPrimerApellido(), $docente->getSegundoApellido(), $docente->getEdad()]);
        
        if($resultado == true){
            header('Location: ../../view/docentes/docentes.php');
        }else{
            echo "ERROR EN EL REGISTRO";
        }
    }

?>