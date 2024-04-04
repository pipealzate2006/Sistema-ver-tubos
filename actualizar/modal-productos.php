<div class="modal fade" id="productos<?php echo $fila['idproductos']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="../actualizar/productos.php">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $fila['idproductos']; ?>">
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Nombre del Tubo:</label>
                            <input type="text" class="form-control" id="recipient-name" name="nombre" value="<?php echo $fila[1]; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="number" class="form-control" id="recipient-name" name="cantidad" value="<?php echo $fila['cantidad']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Imagen del Tubo:</label>
                            <img src="../<?php echo $fila[3]; ?>" width="70px">
                            <input type="file" class="form-control" id="recipient-name" name="imagen_tubo" value="<?php echo $fila[3]; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Imagen del Material:</label>
                            <img src="../<?php echo $fila[4]; ?>" width="70px">
                            <input type="file" class="form-control" id="recipient-name" name="imagen_material" value="<?php echo $fila[4]; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Descripción:</label>
                            <input type="text" class="form-control" id="recipient-name" name="descripcion" value="<?php echo $fila['descripcion']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Materiales:</label>
                            <input type="text" class="form-control" id="recipient-name" name="materiales" value="<?php echo $fila['materiales']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">Precio:</label>
                            <input type="number" class="form-control" id="recipient-name" name="precio" value="<?php echo $fila['precio']; ?>">
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