<?php
session_start();
class SessionControlador{    
    public function IniciarSession($usuario,$pasword){
        //session_start();
        include_once "../Modelo/CRUDUsuario.php";
        $Modelo =  new  CRUDUsuario();
        $stmt = $Modelo->SelectUnUsuario($usuario,$pasword);
        //var_dump($Modelo->SelectUnUsuario($usuario,$pasword));
        //var_dump($stmt);
        foreach ($stmt as $key => $value) {
  
        }
            //echo $value[1];
            //echo $value[2];
        
        //codigo inicio de sesion
        //$_SESSION['usuario']=$usuario;
        //$_SESSION['pasword']=$pasword;
        if (isset($value[1]) and isset($value[2])) {
            if ($usuario === $value[1]) {
                if ($pasword === $value[2]) {
                    //echo "contraseña correcta ";
                    $_SESSION["usuario"]=$value[1];

                }
            }
        }else{
             //echo "usuario o contraseña incorrecta ";
        }
    }

    public function CerrarSession(){
        //session_start();
        //var_dump($_SESSION['usuario']);
        session_unset();
        session_destroy();
        //var_dump($_SESSION['usuario']);
    }
}


//$controlador = new SessionControlador();
// $controlador->IniciarSession("L","123");
//$controlador->CerrarSession();
