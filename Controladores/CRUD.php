<?php 
include_once 'conexion.php';

	
class Acciones 
{
	public function Mostrar(){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM tproductos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}
	public function Insertar($clav,$correo,$total){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "INSERT INTO `tVentas` (`id`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES (NULL, '$clav', '', NOW(), '$correo', '$total', 'pendiente');";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();
		$idventa=$conexion->lastInsertId();
	   return $idventa;
	   
        
	}
	


	

}






 ?>