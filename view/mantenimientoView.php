{{> headerTaller}}
<div style="margin-left: 80px">
<h1>mantenimiento</h1>
    <form action="mandarTaller" method="post">
    <div class="form-group" style="width: 70%">
        <label>Seleccione vehiculo</label>
    <select class="form-control"  name="patente">
        <optgroup label="Vehiculo">
            {{#tractores}}
            <option value="{{patenteTractor}}">{{patenteTractor}}</option>
            {{/tractores}}
        </optgroup>
    </select>
        <br>
        <label>Seleccione fecha ingreso a taller</label>
        <input class="form-control"  type='datetime-local' name='fechaEntrada' placeholder="Fecha ingreso a taller" autocomplete='off'>
        <input type="submit" class="btn btn-primary mt-2" value="enviar a taller">
    </div></form>

<div>
    <h3>En taller</h3>
    {{#taller}}
    <div class="card m-2"  style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Patente: {{patenteMantenimiento}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{estadoMantenimiento}}</h6>
            <p class="card-text">Fecha de ingreso a taller: {{fechaIngreso}}</p>
        </div>
        <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{patenteMantenimiento}}'>
            <i class="fas fa-wrench"></i>
        </button>
        <!--boton modificar -->
        <div class='modal fade' id='modificar{{patenteMantenimiento}}'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <!-- Modal Header -->
                    <div class='modal-header'>
                        <h4 class='modal-title'>Finalizando reparacion</h4>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class='modal-body'>
                        <h5>Patente de vehiculo: {{patenteMantenimiento}}</h5>
                        <form  action='mandarAService' enctype='multipart/form-data' method='post'>
                            <input type="hidden" name="patente" value="{{patenteMantenimiento}}">
                            <label>Seleccione fecha de egreso del taller</label>
                            <input class="form-control"  type='datetime-local' name='fechaEgreso' placeholder="Fecha egreso del taller" autocomplete='off'><br>
                            <label>Seleccione costo del mantenimiento</label>
                            <input class="form-control" type="number" min="1" name="costoMantenimiento" placeholder="Ingrese costo"  autocomplete='off'><br>
                            <label>Indique respuestos cambiados</label>
                            <input class="form-control" type="text" name="repuestosCambiados" placeholder="Ingrese repuestos cambiados" autocomplete='off'><br>
                            <label>Descripcion del mantenimiento</label>
                            <textarea rows="4" class="form-control" name="descripcion" placeholder="Ingrese descripcion" autocomplete='off'></textarea><br>
                            <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Finalizar reparacion'>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{/taller}}
</div>

</div>
{{> footer}}
