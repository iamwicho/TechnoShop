<div id="MULaptop" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Actualizar registro de <b>Laptop</b></h3>
            </div>
            <div class="modal-body">

                <form method="POST" action="updateLaptop.php">
                    <div class="col-md-6">
                        <label>Condicion:</label>
                        <input type="hidden" name="id_Producto" id="update_idL" >
                        <input type="text" name="condicion" id="condicion" class='form-control' maxlength="100" required >

                    </div>
                    <div class="col-md-6">
                        <label>Disponibilidad:</label>
                        <input type="text" name="disponibilidad" id="disponibilidad" class='form-control' maxlength="100" required >
                    </div>
                    <div class="col-md-6">
                        <label>Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class='form-control' maxlength="15" required >
                    </div>
                    <div class="col-md-6">
                        <label>RAM:</label>
                        <input type="text" name="ram" id="ram" class='form-control' maxlength="64" required >


                    </div>
                    <div class="col-md-6">
                        <label>Gráficos:</label>
                        <input type="text" name="graficos" id="graficos" class='form-control' maxlength="50" required >
                    </div>
                    <div class="col-md-6">
                        <label>Almacenamiento Principal:</label>
                        <input type="text" name="almacenamientoPrincipal" id="almacenamientoPrincipal" class='form-control' maxlength="20" required >
                    </div>
                    <div class="col-md-6">
                        <label>Almacenamiento Secundario:</label>
                        <input type="text" name="almacenamientoSecundario" id="almacenamientoSecundario" class='form-control' maxlength="20" required >
                    </div>
                    <div class="col-md-12">
                        <label>Puertos:</label>
                        <textarea name="puertos" id="puertos" class='form-control' maxlength="255" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Batería:</label>
                        <input type="text" name="bateria" id="bateria" class='form-control' maxlength="20" required >
                    </div>

                    <div class="modal-footer">
                        <hr>
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" name="updateLaptop" class="btn btn-success" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>