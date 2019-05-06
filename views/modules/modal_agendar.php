
<div class="modal fade" id="agendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agende su cita</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="control-label col-lg-2">Fecha*</label>
          <div class="col-lg-10">
            <input type="date" class="form-control" id="fecha" name="nuevafecha">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-2">Hora*</label>
          <div class="col-lg-10">
            <input type="time" class="form-control" id="hora" name="nuevahora">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-2">Empresa*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="empresa" name="nuevaempresa">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-2">Contacto*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="contacto" name="nuevocontacto">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-2">Dirección*</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="direccion" name="nuevadireccion">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-2">Telefono*</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" id="telefono" name="nuevotelefono">
          </div>
        </div>
                <div class="form-group">
          <label class="control-label col-lg-2">Email*</label>
          <div class="col-lg-10">
            <input type="email" class="form-control" id="email" name="nuevoemail">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12">
          <p class="alert alert-info">* Campos obligatorios</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Agendar Cita">
      </div>

      <?php

          $crearCita = new ControladorCita();
          $crearCita -> ctrCrearCita();

      ?>

      </form>

    </div>
  </div>
</div>