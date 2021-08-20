<?php 
include_once 'Layout2.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/conexion.php'; 
include_once '../Controladores/CRUD.php';
   $correo=$_POST["email"]; 
   
    


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

?>
