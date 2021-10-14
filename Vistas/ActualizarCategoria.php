<?php
    include_once('../Controladores/CRUDProductos.php');
    $id=$_POST['id'];
    $nombre=$_POST['n'];
    $Categorias = new CRUDCategorias();
    $ActualizarCategorias = $Categorias->Actualizar($id,$nombre);
    if ($ActualizarCategorias) {
        echo 1;
    }
    else{
        echo 0;
    }
    

?>