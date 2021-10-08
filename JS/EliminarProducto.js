function Preguntar(id) {
    alertify.confirm("¿Esta seguro de eliminar este producto?",
    function () {
        alertify.success('Si');
    },
    function () {
        alertify.error('Cancelar');
    });
}


function eliminar(id) {
    var formid = new FormData();
    formid.append('id', id);
    $.ajax({
        url: 'Eliminar.php',
        type: 'post',
        data: formid,
        contentType: false,
        processData: false,
        success: function (r) {
            if(r==1){
                $('#tabla_productos').load('../Vistas/Inventario.php #tabla_body');
                alertify.success('Eliminado con exito');

            }else{
                alertify.error('Error al eliminar el producto');

            }
           
        }
    });
    return false;

   
}