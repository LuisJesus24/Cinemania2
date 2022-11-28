<?php 
    $conexion = new mysqli('localhost','root','','cinemania_v');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>