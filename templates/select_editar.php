<?php
    $data = file_get_contents("php://input");

    require 'conexion.php';

    $query = "select * from productos where id = ?";

    // Sentencias preparadas
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param('i', $data);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $row = $resultado->fetch_assoc();

    echo json_encode($row)
    
    //print_r($row);

?>
