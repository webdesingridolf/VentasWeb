<?php
class modelocontroller {


    public function MostrarProducto(){
        require_once("../Modelo/MostrarProducto.php");

        $Modelo =  new  CRUDProductos();
        $stmt = $Modelo->Mostrar();
        return $stmt;
    }





    
}
?>