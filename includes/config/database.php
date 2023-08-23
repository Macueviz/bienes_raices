<?php

function conectarDB() {
    $db = mysqli_connect( 'localhost' , 'german', 'mysql1324', 'bienesraices_crud' );

    if(!$db) {
        echo 'Fallo conexion';
        exit;

    }
    
    return $db;

}

?>