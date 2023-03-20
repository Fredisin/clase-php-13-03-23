<?php

    include '../model/conexion.php';

    if($_POST){
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        //CONSULTA A BD
        $sentencia = $con -> prepare("SELECT * FROM usuario WHERE email = ? AND contrasena = ?;");
        $sentencia -> execute([$email, $contrasena]);
        $contador_usuarios = $sentencia -> fetchALL(PDO::FETCH_OBJ);
        if(sizeof($contador_usuarios)>0){
            header('Location: ../view/');
        }else{
            echo "no existe";
        }
    }

?>