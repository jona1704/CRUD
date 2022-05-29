<?php
    $servidor = "127.0.0.1"; // localhost = 127.0.0.1
    $usuario = "root";
    $password = "123456";
    $bd = "fes_acatlan";

    // Conexion
    $conn = new mysqli($servidor, $usuario, $password, $bd);

    // Verificar la conexion
    if($conn->connect_error){
        // connect_error es un booleano (true o false)
        die("Fallo la conexion: ". $conn->connect_error);
    }

    //echo "Conexión Exitosa";
?>