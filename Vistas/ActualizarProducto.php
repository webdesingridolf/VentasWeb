<?php 
 $id=$_POST["i"];
 $Nombre=$_POST["n"];
 $Detalle=$_POST["d"];
 $Precio=$_POST["p"];
 $Stock=$_POST["s"];
 $Categoria=$_POST["c"];
 $Id=$_POST["i"];


 $tamanoArchivo = $_FILES['f']['size'];
 $imagenSubida = fopen($_FILES['f']['tmp_name'], 'r');
 $binariosImagen = fread($imagenSubida, $tamanoArchivo);
 
 

 
 include_once '../Controladores/CRUDProductos.php';
 $producto = new CRUDProductos();
 $Actualizar = $producto->Actualizar($Id,$Nombre,$Detalle,$binariosImagen,$Categoria,$Stock,$Precio);
 if ($Actualizar) {
    echo 1;
 }
 else{
    echo 0;
 }
 
 


?>