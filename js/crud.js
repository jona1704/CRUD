// Accediendo al main
const main = document.querySelector('main');
// Accediendo a la ventana Modal
const modalBg = document.querySelector('.modal_bg');

// Accediendo al boton de nuevo producto
const btnNuevo = document.querySelector('#btnNuevo');
btnNuevo.addEventListener('click', () => {
    //alert("¿que pompo?")
    window.location.href = "http://localhost/php_project_2/formulario.php";
})

// Informacion de formulario
const formaModal = document.querySelector('#fm_modal');
const modalFmID = document.querySelector('#modal_idp');
const modalFmNombre = document.querySelector('#modal_nombre');
const modalFmPrecio = document.querySelector('#modal_precio');
const modalFmImagen = document.querySelector('#modal_imagen');
const modalFmDescripcion = document.querySelector('#modal_descripcion');
// Acceder al span
const imgActual = document.querySelector('#img_actual');
// Boton Cancelar
const cancel = document.querySelector('#btnCancelar');
cancel.addEventListener('click', cancelar);
const editar = document.querySelector('#btnEditar');
editar.addEventListener('click', editar);


 function listarProductos(){
    fetch('templates/select.php', {
        method: 'post'
    })
    .then(response => response.json())
    .then(response => {
        let str = "";
        str = "<div class='container'>";
        str += "<div class='flex'>"
        response.forEach(elemento => {
            str += "<div class='card'>";

            let url = 'http://localhost/php_project_2/upload/' + elemento.imagen;
            str += "<img src='" + url + "' alt='Imagen Producto'>";
            //str += "<img src='http://localhost/php_project_2/img/empty.jpeg' alt='Imagen Producto'>";

            str += "<h4>" + elemento.nombre + "</h4>";
            str += "<h4>" + elemento.precio + "</h4>";
            str += "<p>" + elemento.descripcion + "<p>";
            str += "<div class='botones'>";
            str += "<a href='#' class='btn_yellow' onclick=actualizarProducto('" + elemento.id + "') >Editar</a><a href='#' class='btn_red' onclick=eliminarProducto('" + elemento.id + "') >Borrar</a>";
            str += "</div>"
            str += "</div>";
        });
        str += "</div>";
        str += "</div>";
        
        main.innerHTML = str;
        //console.log(response);
    })
    .catch(error => console.log(error));
}

function eliminarProducto(id){
    let texto = "¿Esta seguro que desea borrar este artículo?";
    if(confirm(texto) === true){
            fetch('templates/borrar.php', {
            method: 'post',
            body: id
        })
        .then(response => response.text())
        .then(response => {
            if(response == "Ok"){
                //console.log(response);
                listarProductos(); 
                alert("Operación Realizada Correctamente");
            } else{
                console.log("Algo paso mal");
                alert("Se detuvo la operación de borrado");
            }               
        })
    } else{
        alert("Se detuvo la operación de borrado");
    }
    
}

function actualizarProducto(id){
    //alert(id);
    fetch('templates/select_editar.php', {
        method: 'post',
        body: id
    })
    .then(response => response.json())
    .then(response => {
        modalFmID.value = response.id;
        modalFmNombre.value = response.nombre;
        modalFmPrecio.value = response.precio;
        imgActual.textContent = response.imagen;
        modalFmDescripcion.value = response.descripcion;
    });

    modalBg.classList.add('bg-active');
}

function Editar(event){
    event.preventDefault();

    const data = new FormData(formaModal);

    fetch('templates/editar.php', {
        method: 'post',
        body: data
    })
    .then(response => response.text())
    .then(response => {
        //console.log(response); 
        if(response === "Editado"){
            alert("Información Editada Correctamente");
            listarProductos(); 
            modalBg.classList.remove('bg-active');
        } else{
            alert("Error al Editar Información");
        }        
    })
    .catch(error => {
        console.log(error);
        alert("Error al Editar Información");
    });
    
    //console.log(formaModal);
}

function cancelar(){
    modalBg.classList.remove('bg-active');
}

// Invocamos Funcion
listarProductos(); // <== ESTE ERA EL ERROR
