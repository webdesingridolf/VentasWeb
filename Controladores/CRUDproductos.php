<?php
include_once 'conexion.php';
    class CRUDProductos {
        public function Agregar($nombre,$detalle,$imagen,$categoria,$stock,$precio) {
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "INSERT INTO `vw_Ventas` ( `Nombre`, `Precio`, `Imagen`, `Categoria`, `Detalle`, `Stock`) VALUES ('$nombre', '$precio', '$imagen', '$categoria', '$detalle', '$stock');";
		    $resultado = $conexion->prepare($consulta);
		    $resultado->execute();
	        return $resultado;
            
        }
        public function Actualizar(){

        }
        public function Eliminar(){

        }
    }
    class CRUDCategorias{
        public function Mostrar(){
            $date=new Conexion();
            $conexion=$date->Conectar();
            $consulta = "SELECT * FROM vw_categoria";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>