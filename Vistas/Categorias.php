<?php
include_once("AdminBarNav.php");
include_once('../Controladores/CRUDProductos.php');

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
            <h3 class="card-title">Lista de Categorias</h3>

        </div>
        
        <!-- /.card-header -->
        <div class="card-body p-0">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Agregar">
                        Agregar Nueva Categoria
                    </button>
            <div class="table-responsive" id="contenedortabla">
                <table class="table m-0" id="tabla_categorias">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody id="tabla_body">
                        <?php foreach ($MostrarCategorias as $item) {

                            $Datos = $item['id'] . "||" .
                                $item['Nombre'];


                        ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['Nombre']; ?></td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UpdateModal" onclick="CargarDatos('<?php echo $Datos  ?>')">
                                        Editar
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="Preguntar(<?php echo $item['id'] ?>)">Eliminar</button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        
    </div>
    <!-- /.card -->
    </div>
 


    <!-- Modal -->
    <div class="modal fade" id="Agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" id="formAgregar" enctype="multipart/form-data" onsubmit="return false">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    <button class="btn btn-primary" type="submit" onclick=" Agregar()">Guardar Categoria</button>

                </div>
            </div>
        </div>
    </div>

    <!--modal actualizar Categoria-->
    <!-- Modal -->
    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" method="post" id="UpdateForm" enctype="multipart/form-data" onsubmit="return false">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Nombre</label>
                                <input type="text" class="form-control" id="UpName" required>
                                <input type="hidden" id="UpId">

                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    <button class="btn btn-primary" type="submit" onclick=" Actualizar()">Actualizar Categoria</button>

                </div>
            </div>
        </div>
    </div>
    <script src="../JS/categorias.js"></script>

</body>

</html>