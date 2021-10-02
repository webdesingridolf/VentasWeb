<?php
include_once '../Controladores/CRUDProductos.php';
$producto = new CRUDProductos();
$agregar = $producto->Agregar($nombre,$detalle,$imagen,$categoria,$stock,$precio);
?>