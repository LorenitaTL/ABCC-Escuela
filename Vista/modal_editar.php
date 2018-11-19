<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
        <form action="Scripts/Servidor/procesar_modificacion.php" method="post">
            <label>Número de Control</label>
        		<input type="text" id="num_control" name="num_control" class="form-control input-sm">
          	<label>Nombre</label>
          	<input type="text" name="nombre" id="nombre" class="form-control input-sm">
          	<label>Primer Apellido</label>
          	<input type="text" name="primer_ap" id="primer_ap" class="form-control input-sm">
          	<label>Segundo Apellido</label>
          	<input type="text" name="segundo_ap" id="segundo_ap" class="form-control input-sm">
          	<label>Edad</label>
          	<input type="text" name="edad" id="edad" class="form-control input-sm">
            <label>Semestre</label>
          	<input type="text" name="semestre" id="semestre" class="form-control input-sm">
            <label>Carrera</label>
          	<input type="text" name="carrera" id="carrera" class="form-control input-sm">
            <br>
            <input type="submit" class="btn btn-primary" name="btn_iniciar_sesion">
        </form>
      </div>
    </div>
  </div>
</div>
