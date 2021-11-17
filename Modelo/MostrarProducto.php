<?php
    require_once("../Modelo/Conectar.php");
    class CRUDProductos{
        //require_once("Conectar.php"):
        public function Mostrar(){
            $Conexion = new Conexiondb();
            $sql = "SELECT * FROM vw_productos ORDER BY id ASC;";
            $resultado = $Conexion->Conectar()->prepare($sql);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }

?>