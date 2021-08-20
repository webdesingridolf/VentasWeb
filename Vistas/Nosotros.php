<?php include_once '../Vistas/Layout.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctanos1</title>
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="container">

        <h1 class="text-center">Contactanos <span></span></h1>
        
        <div class="rebote animado de envoltorio de contacto">
            <div class="Formulario de contacto">
                <div class="float-left col-6">
                   
                
                <div class="Datos del Contacto col-6 pt-4">
                <h4>Más Información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> av. Grau N°511</li>
                    <li><i class="fas fa-phone"></i> (+84) 55 33 44</li>
                    <li><i class="fas fa-envelope-open-text"></i> tienda@gmail.com</li>
                </ul>
            </div>
                </div>
                <form class="col-6 float-right"action="">
                    <p>
                        <label>Nombre Completo </label>
                        <input type="text" class="form-control"  name="Nombre Completo">
                    </p>
                    <p>
                        <label>Email </label>
                        <input type="email" class="form-control"  name="email">
                    </p>
                    <p>
                        <label>Número de Celular</label>
                        <input type="tel" class="form-control"  name="celular">
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" class="form-control"  name="Asunto">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="mensaje"  class="form-control" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button class="btn btn-success">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            
        </div>

    </div>

</body>
</html>
