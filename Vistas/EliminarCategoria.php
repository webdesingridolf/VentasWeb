<?php
    include_once('../Controladores/CRUDProductos.php');
    $id=$_POST['id'];
    $Categorias = new CRUDCategorias();
    $EliminarCategorias = $Categorias->Eliminar($id);

    if ($EliminarCategorias) {
        echo 1;
    }
    else{
        echo 0;
    }

?>