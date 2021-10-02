<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../css/estilo.css">-->
    <script src="../js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/sweetalert2.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #2287bd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav container-fluid">

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
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <i class="fas fa-shopping-cart nav-link dropdown-toggle img-fluid" height="70px" width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
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
                            <!-- <li class="nav-item">
                                <button type="button" class="btn btn-success">Iniciar Sesion</button>
                            </li> -->
                        </ul>
                    </div>

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
                        
                        <li class="nav-item d-flex">
                            <a class="btn btn-success" aria-current="page" href="Session.php">login</a>
                            <!-- <a href="Session.php" id="log-in" class="btn btn-danger btn-block">login</a> -->
                        </li>
                    <?php
                    }

                    ?>


                </ul>
            </div>
        </div>
    </nav>


</body>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>


</html>
<?php
if (isset($_POST["cerrar"])) {
    require_once("../Controladores/SessionControlador.php");
    $controlador = new SessionControlador();
    $controlador->CerrarSession();
    //header("location: /Session.php");
}
?>