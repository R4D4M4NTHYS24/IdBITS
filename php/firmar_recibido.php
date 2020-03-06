<div id="modal_firmar_recibido" class="modal modal-fixed-footer" style="min-height: 450px;">
    <h4 class="teal lighten-2  fixed" style="color: white;">&nbsp Firmar Contrato Recibido</h4>
    <div class="modal-content">
        <p>Ingrese su firma digital con la respectiva contraseña para hacer oficial el Contrato y enviarlo para su firma al trabajador.</p>
        <form id="myform">
            <input id="myfile" name="file" type="file" />
            <input type="password" id="passwordkey" name="passwordkey" placeholder="Contraseña" class="form-control">
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" style="display:none" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="decrypt_wallet(1)">Confirm</button>
        <div class="alert alert-danger" role="alert" id="alert_pass" style="display:none;">
            Porfavor llene el campo de contraseña
        </div>
        <div class="alert alert-danger" role="alert" id="alert_firma" style="display:none;">
            Porfavor cargue el archivo de su Firma
        </div>
    </div>
</div>