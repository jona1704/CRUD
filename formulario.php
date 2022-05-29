<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../php_project_2/css/formulario.css">
</head>
<body>    
    <header>
        <h1>Registro de Productos</h1>
    </header>
    <main>
        <!-- <form id="formulario" action="../fes_php/templates/productos.php" method="post"> -->
        <form id="formulario">
        <div id="divNuevo"><button class="btnNuevo" id="btnNuevo">Ver Listado de Productos</button></div>
            <fieldset>
                <legend>Información de Productos</legend>
                 <!-- <div class="error"></div>  -->
                <div class="form-field"> 
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" autocomplete="off" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="precio">Precio: </label>
                    <input type="number" name="precio" id="precio" step="0.01" autocomplete="off" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="imagen">Subir Imagen: </label>
                    <input type="file" name="imagen" id="imagen" required>
                    <small></small>
                </div>
                <div class="form-field"> 
                    <label for="descripcion">Descripción: </label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
                    <small></small>
                </div>
                
                <div class="form-field">
                <input type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        Derechos Reservados &copy; - 2022
    </footer>
    <script src="../php_project_2/js/insertar.js" type="module"></script> 
</body>
</html>
