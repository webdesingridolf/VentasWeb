<?php
    session_start();
    class carrito{
        public function add($btn,$id,$nombre,$precio,$cantidad){
           
            $mensaje="";
            if (isset($btn)) {
                switch($btn){
                    case 'Agregar':
                        if (is_numeric($id) ) {
                            $mensaje.="OK..Corecto".$id;
                        }
                        else{
                            $mensaje.="Ups. Incorecto".$id;
                           
                        }
                        if (is_string($nombre) ) {
                            $mensaje.="OK..Corecto".$nombre;
                        }
                        else{
                            $mensaje.="Ups. Incorecto".$nombre;
                            
                        }
                        if (is_numeric($precio) ) {
                            $mensaje.="OK..Corecto".$precio;
                        }
                        else{
                            $mensaje.="Ups. Incorecto".$precio;
                           
                        }
                        if (is_numeric($cantidad) ) {
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
                    }
                    $mensaje=$_SESSION['Carrito'];
                    break;
                    case 'Eliminar':
                        if (is_numeric($id)) {
                            foreach($_SESSION['Carrito'] as $indice=>$product){
                                if ($product['id']==$id) {
                                    unset($_SESSION['Carrito'][$indice]);
                                    $date="<script>alert('Elemento borrado')</script>";
                                }
                            }
                        }
                        
                    
                    break;
                }
            }

            return $mensaje;

        }
        
    }
?>