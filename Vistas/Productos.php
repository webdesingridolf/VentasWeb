<?php
include_once 'layout.php';
include_once '../Controladores/CRUD.php';
include_once  '../Controladores/config.php';
    $Productos=new Acciones();
    $Mostrar=$Productos-> Mostrar();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <title>Carrito Compras en JavaScript</title>
</head>

<body>

    <header>

    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y accede a un descuento</p>
        </div>

        <div class="container" id="lista-productos">
            <?php foreach($Mostrar as $item){ ?>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                   <img src="../img/LogoSAM.png" class="card-img-top">
                    <div class="card-body">
                        <h4 class="my-0 font-weight-bold"><?php echo $item['Nombre']?></h4>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li><?php echo $item['Detalle']; ?></li>
                            
                        </ul>
                        <h1 class="card-title pricing-card-title precio">S/. <span class=""><?php echo $item['Precio'] ?></span></h1>
                        <p><?php echo $item['id']; ?></p>
                        
                        
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $item['id']; ?>">Comprar</a>
                    </div>
                </div>

               
                

            </div>
            <?php } ?>

        </div>
    </main>

    <script src="../JS/jquery-3.4.1.min.js"></script>
    <script src="../JS/carrito.js"></script>
    <script src="../JS/pedido.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/sweetalert2.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
</body>

</html>