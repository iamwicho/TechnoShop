<div id="MUPedido" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Actualizar estado de compra</h3>
            </div>
            <div class="modal-body">

                <form method="POST" action="updatePedido.php">
                    <div class="col-md-6">
                        <label>Estado de compra:</label>
                        <input type="hidden" name="id_Pedido" id="update_id">
                        <div>

                            <select class="form-control select2" type="text" placeholder="Estado" name='id_Estado' id="id_Estado">
                                <option selected="selected" ></option>
                                <option>Pedido</option>
                                <option>Enviado</option>
                                <option>En camino</option>
                                <option>Entregado</option>
                                <option>En Proceso</option>
                                <option>Rechazdo</option>
                        </div>

                    </div>


                    <div class="modal-footer">
                        <hr>
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" name="updatePedido" class="btn btn-success" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>