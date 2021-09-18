<?php
//echo "funcionado";

    include_once '../Controladores/CRUD.php';
    $lista=new Acciones();
    

if( isset($_POST['codigoDepar']) ) {
    $codDepartamento = $_POST['codigoDepar'];
    //obtenerProvincias($codDepartamento);
    $Provincia=$lista-> obtenerProvincias($codDepartamento);
    echo $Provincia;

} else if( isset($_POST['codigoProv']) ) {
    $codProvincia = $_POST['codigoProv'];
    //obtenerDistritos($codProvincia);
    $Distrito=$lista-> obtenerDistritos($codProvincia);
    echo $Distrito;
} else {
    $Departamento=$lista-> listarDepartamento();
    echo $Departamento;
}
?>