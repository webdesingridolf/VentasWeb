<?php
include_once '../Controladores/CRUD.php';

$Productos = new Acciones();
$Mostrar = $Productos->Mostrar();
var_dump( json_encode($Mostrar))
?>