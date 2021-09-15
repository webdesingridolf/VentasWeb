<?php
//jalando archivo del sdk de mercado pago
require __DIR__ .'../../vendor/autoload.php';
//token access creado con la cuenta del vendedor.
MercadoPago\SDK::setAccessToken('TEST-464450392007857-091519-5e1b864b4be9672903716985dd57539c-824990309');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>