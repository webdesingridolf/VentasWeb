<?php
include_once 'layout.php';
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

    <script src="../JS/carrito.js"></script>
    <script src="../JS/pedido.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>