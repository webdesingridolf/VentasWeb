<?php
   session_start();
include_once '../Controladores/config.php'; 
          
    $mensaje="";
 
    if (isset($_POST['btnagregar'])) {
        switch($_POST['btnagregar']){
            case 'Agregar':
                if (is_numeric(openssl_decrypt($_POST['id'],CODE,KEY)) ) {
                    $id=openssl_decrypt($_POST['id'],CODE,KEY);
                    $mensaje.="OK..Corecto".$id;
                }
                else{
                    $mensaje.="Ups. Incorecto".$id;
                   
                }
                if (is_string(openssl_decrypt($_POST['nombre'],CODE,KEY)) ) {
                    $nombre=openssl_decrypt($_POST['nombre'],CODE,KEY);
                    $mensaje.="OK..Corecto".$nombre;
                }
                else{
                    $mensaje.="Ups. Incorecto".$nombre;
                    
                }
                if (is_numeric(openssl_decrypt($_POST['precio'],CODE,KEY)) ) {
                    $precio=openssl_decrypt($_POST['precio'],CODE,KEY);
                    $mensaje.="OK..Corecto".$precio;
                }
                else{
                    $mensaje.="Ups. Incorecto".$precio;
                   
                }
                if (is_numeric(openssl_decrypt($_POST['cantidad'],CODE,KEY)) ) {
                    $cantidad=openssl_decrypt($_POST['cantidad'],CODE,KEY);
                    $mensaje.="OK..Corecto".$cantidad;
                }
                else{
                    $mensaje.="Ups. Incorecto".$cantidad;
                   
                }
            if (!isset($_SESSION['Carrito'])) {
                $Producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad,

                );
                $_SESSION['Carrito'][0]=$Producto;
                $mensaje="Producto agregado exitosamente";
            }
            else{
                $idPro=array_column($_SESSION['Carrito'],"id");
                if (in_array($id,$idPro)) {
                   echo "<script>alert('El producto ya a sido seleccionado');</script>";
                }
                else{
                    $numPro=count($_SESSION['Carrito']);
                    $Producto=array(
                        'id'=>$id,
                        'nombre'=>$nombre,
                        'precio'=>$precio,
                        'cantidad'=>$cantidad,

                    );
                $_SESSION['Carrito'][$numPro]=$Producto;
                $mensaje="Producto agregado exitosamente";
                }
            }
            
            break;
            case 'Eliminar':
                if (is_numeric(openssl_decrypt($_POST['id'],CODE,KEY))) {
                    $id=openssl_decrypt($_POST['id'],CODE,KEY);
                    foreach($_SESSION['Carrito'] as $indice=>$produc){
                        if ($produc['id']==$id) {
                            unset($_SESSION['Carrito'][$indice]);
                            echo "<script>alert('Elemento borrado')</script>";
                        }
                    }
                }
                
            
            break;
        }
    }


?>