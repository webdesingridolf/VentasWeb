<?php
    class CreateTabla{
        public function CrearTablaUsuario(){
            include_once "Conectar.php";
            $conexion = new Conexiondb();
            $sql= "CREATE TABLE IF NOT EXISTS wv_usuario(
                id int(6) unsigned AUTO_INCREMENT primary key,
                usuario varchar(30) not null,
                pasword varchar(30) not null,
                e_mail varchar(50) not null,
                reg_date timestamp default current_timestamp on update current_timestamp

            )";
            $conexion->Conectar()->exec($sql);
            
        }

        public function InsertUsuario($usuario , $pasword , $e_mail){
            include_once "Conectar.php";
            $conexion = new Conexiondb();
            $con = $conexion->Conectar();
            $sql = "INSERT INTO wv_usuario(usuario,pasword,e_mail) 
                    VALUES ( :usuario, :pasword, :e_mail)";
            $stmt = $con->prepare($sql); 
            $stmt->bindParam(":usuario",$usuario);
            $stmt->bindParam(":pasword",$pasword);
            $stmt->bindParam(":e_mail",$e_mail);

            $stmt->execute();
        }


    }


    //$creartabla = new CreateTabla(); 
    //$creartabla->CrearTablaUsuario();
    
?>