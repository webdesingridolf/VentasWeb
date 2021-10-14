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
        public function Actualizar($id,$nombre,$detalle,$imagen,$categoria,$stock,$precio){
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "UPDATE `vw_productos` SET Nombre=:nombre, Precio=:precio,Imagen=:imagen,Categoria=:categoria,Detalle=:detalle,Stock=:stock WHERE id=:id";
		    $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->bindParam(':precio',$precio);
            $resultado->bindParam(':imagen',$imagen);
            $resultado->bindParam(':categoria',$categoria);
            $resultado->bindParam(':detalle',$detalle);
            $resultado->bindParam(':stock',$stock);
            $resultado->bindParam(':id',$id);


		    $resultado->execute();
	        return $resultado;

        }
        public function Eliminar($id){
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "DELETE FROM `vw_productos` WHERE id=$id";
		    $resultado = $conexion->prepare($consulta);
            
            $resultado->execute();
	        return $resultado;
        }
    }
    class CRUDCategorias{
        public function Mostrar(){
            $date=new Conexion();
            $conexion=$date->Conectar();
            $consulta = "SELECT * FROM vw_categoria ORDER BY id ASC";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public function Agregar($nombre){
            $date=new Conexion();
            $conexion=$date->Conectar();
		    $consulta = "INSERT INTO `vw_categoria`( `Nombre`) VALUES (:nombre)";
            $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        public function Eliminar($id){
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "DELETE FROM `vw_categoria` WHERE id=$id";
		    $resultado = $conexion->prepare($consulta);          
            $resultado->execute();
	        return $resultado;
        }
        public function Actualizar($id,$nombre){
            $date=new Conexion();
		    $conexion=$date->Conectar();
		    $consulta = "UPDATE `vw_categoria` SET Nombre=:nombre WHERE id=:id";
		    $resultado = $conexion->prepare($consulta);
            $resultado->bindParam(':nombre',$nombre);
            $resultado->bindParam(':id',$id);

		    $resultado->execute();
	        return $resultado;
        }
    }
?>