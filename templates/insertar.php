<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen'];
    $descripcion = $_POST['descripcion'];

    //$cadena = $nombre."->".$precio."->".$descripcion;
    //echo json_encode($cadena);

    // Conexion
    // "insert into productos(nombre, precio, descripcion, imagen) values('".$nombre."',".$precio.", '".$descripcion."','".$imagen."')";
    //$query = "insert into productos(nombre, precio, descripcion, imagen) values('".$nombre."',".$precio.", '".$descripcion."','".$imagen['name']."')";
    $query = "insert into productos(nombre, precio, descripcion, imagen) values(?, ?, ?, ?)";
    //var_dump($conn->query($query));
    //$conn->query($query);

    // Sentencias preparadas
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sdss", $nombre, $precio, $descripcion, $imagen['name']);
    $sentencia->execute();

    move_uploaded_file($imagen['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/php_project_2/upload/'.$imagen['name']);

    echo "Ok";
    
?>