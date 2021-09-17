<?php 
include_once 'Layout2.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/conexion.php'; 
include_once '../Controladores/CRUD.php';
   //$correo=$_POST["email"]; 
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       <form action="" method="post">
           <p>Nombre</p>
           <input type="text" name="Nombre" id="">
           <p>Apellido</p>
           <input type="text" name="Apellido" id="">
           <p>Direccion</p>
           <input type="text" name="Direccion" id="">
           <p>Departamento</p>
           <select name="" id="">
               <option value=""></option>
           </select>
       </form>
       
   </body>
   </html>
    
<?php

if ($_POST) {
    $sid=session_id();
    $total=0;
    foreach($_SESSION['Carrito'] as $indice=>$produc){
        $total=$total + ($produc['precio']*$produc['cantidad']);
        
    }
    
    $Productos=new Acciones();
    $Mostrar=$Productos-> Insertar($sid,$correo,$total);
    ?> 
        <form action="Confirmacion.php" method="post">
            <h3>Detalle del Pedido</h3>
            <label for="">Correo: <?php echo $correo?></label><br>
            <label for="">Total: <?php echo $total?></label> <br>
            <label for="">N° de Vaucher: </label> <input type="number" name="nros" id="" max="9999999">
            <input type="submit" value="Pagar">
        </form>
    <?php 
}


// SDK de Mercado Pago
require __DIR__ .'../../vendor/autoload.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script
  src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
  data-preference-id="<?php echo $preference->id; ?>">
</script>
    
</body>
</html>
