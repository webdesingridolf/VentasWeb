<?php 
include_once 'conexion.php';

	
class Acciones 
{
	public function Mostrar(){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM vw_productos ORDER BY id ASC;";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}
	public function Insertar($clav,$correo,$total){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "INSERT INTO `vw_Ventas` (`id`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES (NULL, '$clav', '', NOW(), '$correo', '$total', 'pendiente');";
		$resultado = $conexion->prepare($consulta);
		$resultado->execute();
		$idventa=$conexion->lastInsertId();
	   return $idventa;
	   
        
	}
	public function MostrarDepartamentos(){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM vw_departamento";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $departamentos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $departamentos;
	}
	

	function listarDepartamento(){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM vw_departamento";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
		$departamento=$resultado->fetchAll(PDO::FETCH_ASSOC);

		$json=array();
		foreach ($departamento as $row) {
			$json[] = array(
                'codDepartamento' => $row['idDepa'],
                'nomDepartamento' => $row['departamento'],
            );
		}
        
        $jsonstring = json_encode($json);
		return $jsonstring;

	}
	function obtenerProvincias($codDepartamento) {
        $date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM vw_provincia WHERE idDepa=$codDepartamento";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
		
		$provincia=$resultado->fetchAll(PDO::FETCH_ASSOC);
		$json=array();
		foreach ($provincia as $row) {
			$json[] = array(
                'codProvincia' => $row['idProv'],
                'nomProvincia' => $row['provincia'],
            );
		}
		

        $jsonstring = json_encode($json);
		return $jsonstring;
    }

    function obtenerDistritos($codProvincia) {
        $date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM vw_distrito WHERE idProv=$codProvincia";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
		$distrito=$resultado->fetchAll(PDO::FETCH_ASSOC);
		$json=array();
		foreach ($distrito as $row) {
			$json[] = array(
                'codDistrito' => $row['idDist'],
                'nomDistrito' => $row['distrito'],
            );
		}

        $jsonstring = json_encode($json);
		return $jsonstring;
    }




	

}






 ?>