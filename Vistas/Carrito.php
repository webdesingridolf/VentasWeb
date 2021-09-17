<?php
include_once 'Layout2.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/PasarelaMercadoPago.php';
   
?>
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
            <?php 
            $total=0; ?>
            <?php foreach ($_SESSION['Carrito'] as $indice => $produc) {
                ?>
            <tr>
                <td><?php echo $produc['nombre'] ?></td>
                <td><?php echo $produc['cantidad'] ?></td>
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
                    <form action="pago.php" method="POST">
                        <input type="submit" value="Comprar">
                       
                    </form>
                </td>
            </tr>
            
        </tbody>
</table>
