<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->



    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../css/estilo.css">-->
    <script src="../js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/sweetalert2.min.css">

</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a class="navbar-brand" href="inicio.php">Inicio</a>

                    </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Nosotros.php">Contactenos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nuestros Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Reparacion de Ordenadores y Laptops</a></li>
                        <li><a class="dropdown-item" href="#">Recuperacion de Datos</a></li>
                        <li><a class="dropdown-item" href="#">Instalacion de Antivirus</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                                <i class="fas fa-shopping-cart nav-link dropdown-toggle img-fluid" height="70px" width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>



                                </div>
                            </li>
            </ul>
        </div>
       
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
            <?php
                    if (isset($_SESSION["usuario"])) {
                    ?>
                        <form action="" method="post" class="d-flex">
                            <li class="nav-item btn "> <?php echo $_SESSION["usuario"]; ?> </li>
                            <input class="btn btn-dark" type="submit" name="cerrar" value="cerrar">
                        </form>
                    <?php
                    } else {
                    ?>

                        <li class="nav-item navbar-right">
                            <a class="btn btn-success" aria-current="page" href="Session.php">login</a>
                            <!-- <a href="Session.php" id="log-in" class="btn btn-danger btn-block">login</a> -->
                        </li>
                    <?php
                    }

                    ?>
            </ul>
        </div>
    </nav>









</body>

<script src="../js/sweetalert2.min.js"></script>



</html>
<?php
if (isset($_POST["cerrar"])) {
    require_once("../Controladores/SessionControlador.php");
    $controlador = new SessionControlador();
    $controlador->CerrarSession();
    //header("location: /Session.php");
}
?>
