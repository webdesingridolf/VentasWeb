<?php
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/conexion.php'; 
include_once '../Controladores/CRUD.php';
//jalando archivo del sdk de mercado pago
require __DIR__ .'../../vendor/autoload.php';
//token access creado con la cuenta del vendedor.
MercadoPago\SDK::setAccessToken('TEST-464450392007857-091519-5e1b864b4be9672903716985dd57539c-824990309');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia

    $sid=session_id();
    $srt=array();
    
    foreach($_SESSION['Carrito'] as $indice=>$produc){
        //$total=$total + ($produc['precio']*$produc['cantidad']);
        
        $item = new MercadoPago\Item();
        $item->title =  $produc['nombre'];
        $item->quantity = $produc['cantidad'];
        $item->unit_price = $produc['precio'];
        array_push($srt,$item);
        $preference->items = $srt;
    } 
      
    $preference->save();

?>