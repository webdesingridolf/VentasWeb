<!-- Modal -->
<div class="modal fade" id="modalFormCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" id="formCliente" enctype="multipart/form-data" onsubmit="return false">
                    <input type="hidden" id="idCliente" name="idCliente" value="">
                    <div class="col-md-6">
                        <label for="validationTooltip01">Identificacion</label>
                        <input type="text" class="form-control" id="Nombre" placeholder="" required>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Nombres</label>
                            <input type="text" class="form-control" id="Nombre" placeholder="Nombre" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Apellidos</label>
                            <input type="text" class="form-control" id="Apellido" placeholder="Apellido" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Correo" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Telefono</label>
                            <input type="text" class="form-control" id="Telefono" placeholder="Telefono" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Tipo de Usuario</label>
                            <input type="text" class="form-control" id="rol" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Status</label>
                            <select id="status" class="form-control" aria-label="Default select example">
                                <option selected>Seleccione</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>