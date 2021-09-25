<!DOCTYPE html>
 <html>

 <head>
     <title></title>
    
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #2287bd;">
         <div class="container-fluid">
             <a class="navbar-brand" href="inicio.php">Inicio</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav">

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
                                     <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                         Compra</a>
                                 </div>
                             </li>
                         </ul>
                     </div>

                 </ul>
             </div>
         </div>
     </nav>


 </body>
 
</html>