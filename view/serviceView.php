{{> headerTaller}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<div style="margin-left: 80px;width: 80%">
<h1>servicio</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Patente</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Fecha Egreso</th>
                <th></th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            {{#service}}
            <tr>
                <td>{{patenteMantenimiento}}</td>
                <td>{{modelo}}</td>
                <td>{{marca}}</td>
                <td>{{fechaEgreso}}</td>
                <td>
                    <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{patenteMantenimiento}}'>
                        Ver mas
                    </button>
                    <!--boton modificar -->
                    <div class='modal fade' id='modificar{{patenteMantenimiento}}'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <!-- Modal Header -->
                                <div class='modal-header'>
                                    <h4 class='modal-title'>Service {{patenteMantenimiento}}</h4>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class='modal-body'>
                                    <h5>Datos del service</h5>
                                    <p style="font-size:1.5em">Fecha de ingreso: {{fechaIngreso}}</p>
                                    <p style="font-size:1.5em">Fecha de egreso: {{fechaEgreso}}</p>
                                    <p style="font-size:1.5em">Partes cambiadas: {{repuestosCambiados}}</p>
                                    <p style="font-size:1.5em">Descripcion: {{descripcion}}</p>
                                    <p style="font-size:1.5em">Costo: {{costoMantenimiento}}</p>
                                    <hr>
                                    <h5>Datos del vehiculo</h5>
                                    <p style="font-size:1.5em">Patente: {{patenteMantenimiento}}</p>
                                    <p style="font-size:1.5em">Marca: {{marca}}</p>
                                    <p style="font-size:1.5em">Modelo: {{modelo}}</p>
                                    <p style="font-size:1.5em">Motor: {{motor}}</p>
                                    <p style="font-size:1.5em">Chasis: {{chasis}}</p>
                                </div>
                                <!-- Modal footer -->
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div></td>
            </tr>
            {{/service}}
            </tbody>
        </table>
    </div>
</div>
{{> footer}}
