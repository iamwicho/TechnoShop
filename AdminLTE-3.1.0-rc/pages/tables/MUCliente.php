<div id="MUCliente" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Actualizar registro de <b>Cliente</b></h3>
            </div>
            <div class="modal-body">

                <form method="POST" action="updateCliente.php">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="hidden" name="id_Cliente" id="update_id" >
                        <input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >

                    </div>
                    <div class="col-md-6">
                        <label>Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required >
                    </div>
                    <div class="col-md-6">
                        <label>Usuario:</label>
                        <input type="text" name="usuario" id="usuario" class='form-control' maxlength="15" required >
                    </div>
                    <div class="col-md-6">
                        <label>Correo electrónico:</label>
                        <input type="text" name="correo" id="correo" class='form-control' maxlength="64" required >


                    </div>
                    <div class="col-md-6">
                        <label>Teléfono:</label>
                        <input type="number" name="telefono" id="telefono" class='form-control' maxlength="15" required >
                    </div>
                    <div class="col-md-12">
                        <label>Dirección:</label>
                        <textarea name="direccion" id="direccion" class='form-control' maxlength="255" required></textarea>
                    </div>

                    <div class="modal-footer">
                        <hr>
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" name="updateCliente" class="btn btn-success" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>