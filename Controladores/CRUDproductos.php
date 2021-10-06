<?php
include_once 'conexion.php';
    class CRUDProductos {
        public function Agregar($nombre,$detalle,$imagen,$categoria,$stock,$precio) {
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "INSERT INTO `vw_productos`( `Nombre`, `Precio`,`Imagen`, `Categoria`, `Detalle`, `Stock`) VALUES (:nombre,:precio,:imagen,:categoria,:detalle,:stock)";
		    $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->bindParam(':precio',$precio);
            $resultado->bindParam(':imagen',$imagen);
            $resultado->bindParam(':categoria',$categoria);
            $resultado->bindParam(':detalle',$detalle);
            $resultado->bindParam(':stock',$stock);

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