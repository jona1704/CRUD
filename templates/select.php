<?php
    require 'conexion.php';

    $query = "select * from productos";
    //$datos = [];

    // Sentencias preparadas
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while($row = $resultado->fetch_assoc()){
        $data[] = $row;
    }

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";

    //echo json_encode("Hola");
    echo json_encode($data);

?>