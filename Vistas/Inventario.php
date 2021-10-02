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
                <table class="table m-0">
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
                    <tbody>
                        <?php foreach ($Mostrar as $item) { ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['Nombre'] ?></td>
                                <td><?php echo $item['Detalle']; ?></td>
                                <td><?php echo $item['Categoria']; ?></td>
                                <td><?php $item['Imagen'] ?></td>
                                <td>$<?php echo $item['Precio'] ?></td>
                                <td><?php echo $item['Stock']; ?></td>
                                <td><button type="button" class="btn btn-success">Editar</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button id="btn-abrir-popup" class="btn btn-sm btn-info float-left">Nuevo Producto</button>

        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h3>Agregar Nuevo Producto</h3>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Nombre</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Detalle</label>
                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Detalle del producto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Precio</label>
                        <input type="number" class="form-control" id="validationTooltip02" placeholder="Precio del producto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="inputStatus">Categoria</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option selected disabled>Seleccione una Categoria</option>
                            <?php foreach ($MostrarCategorias as $categoria) { ?>

                                <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['Nombre'] ?></option>



                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Stock</label>
                        <input type="number" class="form-control" id="validationTooltip02" placeholder="Stock del producto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>




                </div>
                <div class="form-group">
                    <label for="validationTooltip02">Imagen</label>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/po-up.js"></script>

</body>

</html>