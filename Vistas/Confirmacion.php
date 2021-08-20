<?php 
if (isset($_POST["nro"]) ) {
    $nroVaucher=$_POST["nro"];
    if ($nroVaucher<=7  ) {
        echo " Compra Exitosa ";
    }
    else{
        echo " Error al procesar la compra";
    }
}
?>
<a href="../index.php">Volver</a>