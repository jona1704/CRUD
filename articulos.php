<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="../php_project_2/css/tarjetas.css">
</head>
<body>
    <header>
        <h1>Listado de Productos</h1>
    </header>
    <div id="divNuevo"><button class="btnNuevo" id="btnNuevo">Ingresar Nuevo Producto</button></div>
    <main>
    </main>
    <footer>
        Derechos Reservados &copy; - 2022
    </footer> 
    <div class="modal_bg">
        <div class="modal">
            <div class="cabecera_modal">
                <h2>Editar Producto</h2>
            </div>
            <div class="forma_modal">
                <form id="fm_modal">
                <label for="name">Nombre: </label>
                <input type="hidden" name="idp" id="modal_idp" value="">
                <input type="text" name="nombre" id="modal_nombre"><br>
                <label for="precio">Precio: </label>
                <input type="number" name="precio" id="modal_precio"><br>
                <label for="imagen">Subir Imagen: </label>
                <span>Imagen Actual: <span id="img_actual">imagen1.jpeg</span></span>
                <span class="indicacion">Puede subir una nueva imagen si lo requiere</span>
                <input type="file" name="imagen" id="modal_imagen">
                <br>
                <label for="descripcion">Descripción: </label>
                <textarea name="descripcion" id="modal_descripcion" cols="30" rows="10"></textarea>
                <div class="botones">
                    <button class="btnEditar" id="btnEditar" onclick="Editar(event)">Editar</button><button class="btnCancelar" id="btnCancelar">Cancelar</button>
                </div>    
                </form>
                
            </div>            
        </div>        
    </div>    
    <script src="../php_project_2/js/crud.js"></script>
</body>
</html>
