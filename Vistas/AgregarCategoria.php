<?php
    include_once('../Controladores/CRUDProductos.php');
    $nombre=$_POST['n'];

    $Categorias = new CRUDCategorias();
    $AgregarCategorias = $Categorias->Agregar($nombre);
    if ($AgregarCategorias) {
        echo 1;
    }
    else{
        echo 0;
    }

?>