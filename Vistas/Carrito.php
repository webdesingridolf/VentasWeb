<?php
include_once 'Layout2.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/PasarelaMercadoPago.php';
   
?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<h3>Lista del carrito</h3>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%">Cantidad</th>
            <th width="20%" >Precio</th>
            <th width="20%">Total</th>
            <th width="5%">--</th>
        </tr>
        </thead>
        <tbody>
            <form action="pago.php" method="post">
            <?php 
            $total=0; ?>
            <?php foreach ($_SESSION['Carrito'] as $indice => $produc) {
                ?>
            <tr>
                <td><?php echo $produc['nombre'] ?></td>
                <td>
                     <button class="incredism" id="disminuir"><i class="fas fa-minus"></i></button>
                     <input class="cantidad"type="text"id="cantidad" name="cantidad" value="<?php echo $produc['cantidad'] ?>">
                     <button class="incredism"id="incrementar"><i class="fas fa-plus"></i></button>
                </td>
                <td>$<?php echo $produc['precio'] ?></td>
                <td>$<?php echo number_format($produc['precio']*$produc['cantidad'],2);?></td>
                <td> <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($produc['id'],CODE,KEY); ?>" >
                    
                    <button class="btn btn-danger" name="btnagregar" type="submit" value="Eliminar">Eliminar</button></td>
                    
                </form>
                    
            </tr>
            <?php $total=$total + ($produc['precio']*$produc['cantidad']); ?>
            <?php
            } ?>
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right"><h3>$<?php echo number_format($total,2) ?></h3></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="" method="POST">
                    
                        <input type="submit" value="Comprar">
                       
                    </form>
                </td>
            </tr>
            </form>
        </tbody>
</table>

<script>
    $("#incrementar").on('click', function() {
    let $incrementar = parseInt($('#cantidad').val());
  
    if (isNaN($incrementar)) {
        $('#cantidad').val("1")
    } else {
        $('#cantidad').val($incrementar + 1);
    }
  
});
$("#disminuir").on('click', function() {
    let $disminuir = parseInt($('#cantidad').val());
  
    if (isNaN($disminuir)) {
        $('#cantidad').val("1")
    } else {
        $('#cantidad').val($disminuir-1);
    }
  
});

</script>
<div class="carrito" >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      
    ></script>
    <!-- JavaScript Bundle with Popper -->
   
    <script src="../JS/NCarrito.js"></script>