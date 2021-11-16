<?php
class modelocontroller {


    public function MostrarProducto(){
        require_once("../../Modelo/index.php");

        $Modelo =  new  CRUDProductos();
        $stmt = $Modelo->Mostrar();
        return $stmt;
    }





    
}
?>