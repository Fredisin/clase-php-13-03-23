<?php

    include '../../model/conexion.php';

    if($_REQUEST['id']){
        //CONSULTA A BD
        $sentencia = $con -> prepare("DELETE FROM cursos WHERE id=?;");
        $resultado = $sentencia -> execute([$_REQUEST['id']]);
        
        if($resultado == true){
            header('Location: ../../view/cursos/cursos.php');
        }else{
            echo "ERROR EN LA ELIMINACION";
        }
    }

?>