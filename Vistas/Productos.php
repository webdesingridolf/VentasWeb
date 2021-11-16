<?php
require_once("Template/Header_TiendaP.php");

include_once '../Controladores/CRUD.php';
include_once  '../Controladores/config.php';
$Productos = new Acciones();
$Mostrar = $Productos->Mostrar();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Carrito Compras en JavaScript</title>
</head>

<body>

    <input id="datos" type="hidden" value="algo">

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y accede a un descuento</p>
        </div>
        <div class="container" id="lista-productos">

            <div class="row">
                <?php foreach ($Mostrar as $item) { ?>
                    <div class="col-sm-4">
                        <div class="card-deck mb-3 text-center">

                            <div class="card mb-4 shadow-sm">
                                <img src="../img/LogoSAM.png" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="my-0 font-weight-bold"><?php echo $item['Nombre'] ?></h4>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li></li>
                                        <li><?php echo $item['Detalle']; ?></li>

                                    </ul>
                                    <h1 class="card-title pricing-card-title precio">S/. <span class=""><?php echo $item['Precio'] ?></span></h1>


                                    <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $item['id']; ?>">Comprar</a>
                                </div>
                            </div>




                        </div>
                    </div>
                <?php } ?>
            </div>


        </div>

    </main>


    <script src="../JS/bootstrap.min.js"></script>

    <script src="../assets/js/carrito.js"></script>
    <script src="../assets/js/pedido.js"></script>
  
</body>
<?php
require_once("Template/Footer_TiendaP.php");
?>

</html>