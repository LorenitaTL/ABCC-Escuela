<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar nuevo alumno</h4>
            </div>
            <div class="modal-body">
              <form action="Scripts/Servidor/procesar_alta.php" method="post">
                <div class="form-group">
                    <label for="num_control">Numero de control</label>
                    <input type="text" name="num_control"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="primer_ap">Primer Apellido</label>
                    <input type="text" name="primer_ap" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="segundo_ap">Segundo apellido</label>
                    <input type="text" name="segundo_ap" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="carrera">carrera</label>
                    <input type="text" name="carrera" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <input type="text" name="semestre" class="form-control"/>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" name="btn_iniciar_sesion">
              </form>


            </div>
        </div>
    </div>
</div>
