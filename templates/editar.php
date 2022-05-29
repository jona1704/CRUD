<?php
    require 'conexion.php';

    if(isset($_POST)){
        $id = $_POST['idp'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $imagen = $_FILES['imagen'];
        $descripcion = $_POST['descripcion'];

        if($imagen['size'] == 0){
            $query = "update productos set nombre = ?, precio = ?, descripcion = ? where id = ?";
            $sentencia = $conn->prepare($query);
            $sentencia->bind_param('sdsd', $nombre, $precio, $descripcion, $id);
            if($sentencia->execute()){
                echo "Editado";
            } else{
                echo "Error";
            }
        } else{
            $query = "update productos set nombre = ?, precio = ?, descripcion = ?, imagen = ? where id = ?";
            $sentencia = $conn->prepare($query);
            $sentencia->bind_param('sdssd', $nombre, $precio, $descripcion, $imagen['name'], $id);
            if($sentencia->execute()){
                move_uploaded_file($imagen['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/php_project_2/upload/'.$imagen['name']);
                echo "Editado";
            } else{
                echo "Error";
            }
            
        }

        
    }

?>
