<?php
    $usuario = $_GET['usuario'];
    if(isset($usuario) && !empty($usuario)){
        echo $usuario;
    } else{
        echo "Error en los datos";
    }
?>