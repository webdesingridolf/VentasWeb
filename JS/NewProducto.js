document.getElementById("Imagen").addEventListener("change", () => {
    var archivoseleccionado = document.querySelector("#Imagen");
    var archivos = archivoseleccionado.files;
    var imagenPrevisualizacion = document.querySelector("#mostrarimagen");
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        imagenPrevisualizacion.src = "";
        return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    var primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    var objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    imagenPrevisualizacion.src = objectURL;

});




function Registrar() {
    var nombre = $("#Nombre").val();
    var detalle = $("#Detalle").val();
    var precio = $("#Precio").val();
    var stock = $("#Stock").val();
    var imagen = $("#Imagen").val();
    var categoria = $("#Categoria").val();

    var formData = new FormData();
    var foto = $("#Imagen")[0].files[0];
    formData.append('n', nombre);
    formData.append('d', detalle);
    formData.append('p', precio);
    formData.append('s', stock);
    formData.append('c', categoria);
    formData.append('f', foto);




    $.ajax({
        url: 'confirmacion.php',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function (respuesta) {

            if (respuesta = 1) {


                document.getElementById("formulario").reset();
                
                document.getElementById("mostrarimagen").style.display = "none";

                $('#tabla_productos').load('../Vistas/Inventario.php #tabla_body');

                alert("agregado con exito")
                

            }
        }
    });
    return false;

}


