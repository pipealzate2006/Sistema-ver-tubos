<div class="modal fade" id="usuarios<?php echo $fila['idusuarios']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Usuarios</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="../actualizar/usuarios.php">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $fila['idusuarios']; ?>">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Nombre del administrador:</label>
                            <input type="text" class="form-control" id="recipient-name" name="nombre" value="<?php echo $fila[1]; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Apellido del administrador:</label>
                            <input type="text" class="form-control" id="recipient-name" name="apellido" value="<?php echo $fila[2]; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Correo:</label>
                            <input type="email" class="form-control" id="recipient-name" name="correo" value="<?php echo $fila[3]; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>