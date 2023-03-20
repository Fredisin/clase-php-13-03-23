<?php

    include '../../model/conexion.php';

    if($_REQUEST['id']){
        //CONSULTA A BD
        $sentencia = $con -> prepare("DELETE FROM docentes WHERE id_docente=?;");
        $resultado = $sentencia -> execute([$_REQUEST['id']]);
        
        if($resultado == true){
            header('Location: ../../view/docentes/docentes.php');
        }else{
            echo "ERROR EN LA ELIMINACION";
        }
    }

?>