<?php
   include_once('../Controladores/CRUDProductos.php');



   $detalleventa = new CRUDventas();

$datos=json_decode($_POST['dato']);


var_dump($datos);
foreach ($datos as $data) {
    $id= $data->{"id"};
    $cantidad=$data->{'cantidad'};
    $precio=$data->{'precio'};

    $Agregardetalleventa = $detalleventa->Agregar($id,$cantidad,$precio);

}




 
?>