<?php 
    include_once '../Controladores/CRUD.php';
    include_once '../Vistas/Layout.php';
    include_once  '../Controladores/config.php';
    $Productos=new Acciones();
    $Mostrar=$Productos-> Mostrar();
    
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Productos</title>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
       
              <div align="center">
              <h2 class="text-center"></h2>
              <div class="row">
                    <?php foreach($Mostrar as $item){ ?>
                
            	<div class="col-3">
                
                    <div class="card text-white bg-primary">
                      <img height="317px" class="card-img-top" src="../img/<?php echo $item['Imagen'] ?>"  data-toggle="popover" title="<?php echo $item['Detalle']; ?>"  >
                      <div class="card-body">
                        <h4 class="card-title"> <?php echo $item['Nombre']?></h4>
                        <p class="card-text">Precio: $<?php echo $item['Precio'] ?></p>
                        <form action="Carrito.php" method="POST">
                            <!--formulario para enviar los datos encriptados-->
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($item['id'],CODE,KEY); ?>" >
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($item['Nombre'],CODE,KEY); ?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($item['Precio'],CODE,KEY);?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,CODE,KEY);?>">

                            <input type="submit" name="btnagregar" class="btn btn-dark" value="Agregar">
                        </form>
                      </div>
                    </div>
                
                   

                
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
 </body>
 </html>
            
