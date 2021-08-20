<?php 
include_once 'config.php'; 
class Conexion{	  
    public static function Conectar() {        
        				        
       		
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}