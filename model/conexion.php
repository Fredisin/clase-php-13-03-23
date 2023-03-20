<?php 
    $host='localhost';
    $usuario='root';
    $contrasena='';
    $bd='gestion-docentes';

    try {
        $con = new PDO(
            'mysql:host='.$host.';dbname='.$bd,$usuario,$contrasena
        );
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>