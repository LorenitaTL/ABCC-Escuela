<div class="modal fade" id="dataDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar registro</h4>
      </div>
      <div class="modal-body">
  	  <h4 class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
        <form action="Scripts/Servidor/procesar_baja.php" method="post">
            <label>Número de Control</label>
        		<input type="text" id="num_controlE" name="num_controlE" class="form-control input-sm">
            <br>
            <input type="submit" class="btn btn-primary" name="btn_iniciar_sesion">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
