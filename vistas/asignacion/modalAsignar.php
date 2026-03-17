
<!-- Modal -->
<div class="modal fade" id="modalAsiganarEquipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
                <label >Nombre de persona</label>
                <select name="idPersona" id="idPersona" class="form-control" require>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-sm-6">
                <label >Tipo de Equipo</label>
                <select name="idEquipo" id="idEquipo" class="form-control" require>
                    <option value=""></option>
                </select>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="color">Color</label>
                    <input type="text" name="color" id="color" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="memoria">Memoria</label>
                    <input type="text" class="form-control" id="memoria" name="memoria">
                </div>
                <div class="col-sm-4">
                    <label for="disco duro">Disco duro</label>
                    <input type="text" class="form-control" id="disco duro" name="disco duro">
                </div>
                <div class="col-sm-4">
                    <label for="procesador">Procesador</label>
                    <input type="text" class="form-control" id="procesador" name="procesador">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
