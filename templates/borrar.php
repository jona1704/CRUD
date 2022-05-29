<?php
    $data = file_get_contents("php://input");
    // print_r($data);
    require 'conexion.php';

    $query = "delete from productos where id = ?";

    // Sentencias preparadas
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param('s', $data);
    if($sentencia->execute()){
        echo "Ok";
    } else{
        echo "Fallo";
    }
    
?>
