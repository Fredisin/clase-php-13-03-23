<?php

    include '../model/conexion.php';
    include '../model/Usuario.php';

    if($_POST){
        $usuario = new Usuario($_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'],$_POST['segundoApellido'],$_POST['email'],$_POST['contrasena']);

        //CONSULTA A BD
        $sentencia = $con -> prepare("INSERT INTO usuario (primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,email,contrasena) VALUES(?,?,?,?,?,?);");
        $resultado = $sentencia -> execute([$usuario->getPrimerNombre(), $usuario->getSegundoNombre(), $usuario->getPrimerNombre(), $usuario->getSegundoApellido(), $usuario->getEmail(), $usuario->getContrasena()]);
        
        if($resultado == true){
            header('Location: ../index.php');
        }else{
            echo "ERROR EN EL REGISTRO";
        }
    }

?>