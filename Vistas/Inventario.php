<?php
include_once("AdminBarNav.php");
include_once '../Controladores/CRUD.php';
include_once '../Controladores/CRUDProductos.php';

$Productos = new Acciones();
$Mostrar = $Productos->Mostrar();
$Categorias = new CRUDCategorias();
$MostrarCategorias = $Categorias->Mostrar();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Style.css">


</head>

<body>
    <br></br>

    <!-- TABLE: LATEST ORDERS -->
    <div class="" style="padding-right: -0.5px;    padding-left: 242px;">
        <div class="card-header border-transparent">
            <h3 class="card-title">Lista de Productos</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0" id="tabla_productos">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Detalles</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tabla_body">
                        <?php foreach ($Mostrar as $item) { ?>
                            <tr>
                                <td ><?php echo $item['id'] ?></td>
                                <td><?php echo $item['Nombre'] ?></td>
                                <td><?php echo $item['Detalle']; ?></td>
                                <td><?php echo $item['Categoria']; ?></td>
                                <td><?php $item['Imagen'] ?></td>
                                <td>$<?php echo $item['Precio'] ?></td>
                                <td><?php echo $item['Stock']; ?></td>
                                <td><button type="button" class="btn btn-success">Editar</button>
                                    <button type="button" class="btn btn-danger" onclick="eliminar(<?php echo $item['id'] ?>)">Eliminar</button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar Nuevo Producto
                    </button>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    <!--Ventana emergente Boostrap-->
    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" id="formulario" enctype="multipart/form-data" onsubmit="return false">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Detalle</label>
                                <input type="text" class="form-control" id="Detalle" placeholder="Detalle del producto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Precio</label>
                                <input type="number" class="form-control" id="Precio" placeholder="Precio del producto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="inputStatus">Categoria</label>
                                <select id="Categoria" class="form-control custom-select">
                                    <option selected disabled>Seleccione una Categoria</option>
                                    <?php foreach ($MostrarCategorias as $categoria) { ?>

                                        <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['Nombre'] ?></option>



                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Stock</label>
                                <input type="number" class="form-control" id="Stock" placeholder="Stock del producto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>




                        </div>
                        <div class="form-group">
                            <img src="" class="card-img-top" id="mostrarimagen">

                            <label for="validationTooltip02">Imagen</label>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="Imagen" lang="es">
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    <button class="btn btn-primary" type="submit" onclick="Registrar()">Guardar Producto</button>

                </div>
            </div>
        </div>
    </div>





    <script src="../js/NewProducto.js"></script>
    <script src="../js/EliminarProducto.js"></script>



    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>




</body>

</html>