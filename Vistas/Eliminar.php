<?php
include_once '../Controladores/CRUDProductos.php';
$id=$_POST["id"];


$producto = new CRUDProductos();
$eliminar=$producto->Eliminar($id);
if ($eliminar) {
    echo 1;
}else{
    echo 0;
}


?>