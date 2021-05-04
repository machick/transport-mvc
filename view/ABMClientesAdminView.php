{{> header}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<section style="margin-left: 70px">
    <section>
        <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#agregar'>
            Agregar Cliente
        </button>
        <!--for demo wrap-->
        <h1>Registro de Clientes</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>cuitOcuil</th>
                    <th>denominacion</th>
                    <th>telefono</th>
                    <th>email</th>
                    <th>contacto1</th>
                    <th>contacto2</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                {{#clientes}}
                <tr>
                    <td>{{nombre}}</td>
                    <td>{{apellido}} </td>
                    <td>{{cuitOcuil}}</td>
                    <td>{{denominacion}}</td>
                    <td>{{telefono}}</td>
                    <td>{{email}}</td>
                    <td>{{contacto1}}</td>
                    <td>{{contacto2}}</td>
                    <td>
                        <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{idCliente}}'>
                            <i class="fas fa-user-edit"></i>
                        </button>
                        <!--boton modificar -->
                        <div class='modal fade' id='modificar{{idCliente}}'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <!-- Modal Header -->
                                    <div class='modal-header'>
                                        <h4 class='modal-title'>Modificar Cliente {{nombre}}</h4>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class='modal-body'>
                                        <form  action='/ABMClientes/updateCliente' enctype='multipart/form-data' method='post' class="row ml-5">
                                            <div class="col-10">
                                                <h4>Datos cliente</h4>
                                                <input type="text" name='idCliente' id='idCliente' value='idCliente' hidden>
                                                <div class="grupo-login" >
                                                    <input type='text' name='nombreClienteProforma' id='nombreClienteProforma' value='{{nombre}}' autocomplete='off'>
                                                    <label for='nombreClienteProforma'>Nombre</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjnombreClienteProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='text' name='apellidoClienteProforma' id='apellidoClienteProforma' value='{{apellido}}' autocomplete='off'>
                                                    <label for='apellidoClienteProforma'>Apellido</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjapellidoClienteProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='text' name='denominacionProforma' id='denominacionProforma' value='{{denominacion}}' autocomplete='off'>
                                                    <label for='denominacionProforma'>Denominacion</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjdenominacionProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='number' name='CuitProforma' id='CuitProforma' value='{{cuitOcuil}}' autocomplete='off'>
                                                    <label for='CuitProforma'>Cuit o Cuil</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjCuitProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='number' name='TelefonoProforma' id='TelefonoProforma' value='{{telefono}}' autocomplete='off'>
                                                    <label for='TelefonoProforma'>Telefono</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjTelefonoProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='text' name='EmailProforma' id='EmailProforma' value='{{email}}' autocomplete='off'>
                                                    <label for='EmailProforma'>Email</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjEmailProforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='text' name='contacto1Proforma' id='contacto1Proforma' value='{{contacto1}}' autocomplete='off'>
                                                    <label for='contacto1Proforma'>Contacto 1</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjcontacto1Proforma"></small>
                                                </div>
                                                <div class="grupo-login">
                                                    <input type='text' name='contacto2Proforma' id='contacto2Proforma' value='{{contacto2}}' autocomplete='off'>
                                                    <label for='contacto2Proforma'>Contacto 2</label>
                                                    <span class="input-bar"></span>
                                                    <small class="mensajeError" id="msjcontacto2Proforma"></small>
                                                </div>
                                                <input type='submit' class="input-submit" id="inputCliente" value='Enviar' class="ml-5">
                                            </div>

                                            <form>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                                    </div>

                                </div>
                            </div>
                        </div></td>
                    <td>
                        <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#borrar{{idCliente}}'>
                            <i class="fas fa-user-slash"></i>
                        </button>
                        <!--boton borrar -->
                        <div class='modal fade' id='borrar{{idCliente}}'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <!-- Modal Header -->
                                    <div class='modal-header'>
                                        <h4 class='modal-title'>Eliminar Cliente</h4>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class='modal-body'>
                                        <h5>Esta seguro que quiere eliminar a {{nombre}} ?</h5>
                                        <form  action='/ABMClientes/deleteCliente' enctype='multipart/form-data' method='post'>
                                            <input type="hidden" name="idCliente" value="{{idCliente}}">
                                            <input class='btn btn-info ml-5 text-center mt-2' type='submit' value='Eliminar'>
                                        </form><br>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                                    </div>

                                </div>
                            </div>
                        </div></td>
                </tr>
                {{/clientes}}
                </tbody>
            </table>
        </div>
    </section>
    <br>

    <!--boton modificar -->
    <div class='modal fade' id='agregar'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <!-- Modal Header -->
                <div class='modal-header'>
                    <h4 class='modal-title'>Agregar Cliente</h4>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                </div>
                <!-- Modal body -->
                <div class='modal-body'>

                    <form  action='/ABMClientes/InsertaCliente' enctype='multipart/form-data' method='post' class="row ml-5">
                        <div class="col-5">
                            <h4>Datos cliente</h4>
                            <div class="grupo-login" >
                                <input type='text' name='nombreClienteProforma' id='nombreClienteProforma' autocomplete='off' required>
                                <label for='nombreClienteProforma'>Nombre</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjnombreClienteProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='apellidoClienteProforma' id='apellidoClienteProforma' autocomplete='off' required>
                                <label for='apellidoClienteProforma'>Apellido</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjapellidoClienteProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='denominacionProforma' id='denominacionProforma' autocomplete='off' required>
                                <label for='denominacionProforma'>Denominacion</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjdenominacionProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='number' name='CuitProforma' id='CuitProforma' autocomplete='off' required>
                                <label for='CuitProforma'>Cuit o Cuil</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjCuitProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='number' name='TelefonoProforma' id='TelefonoProforma' autocomplete='off' required>
                                <label for='TelefonoProforma'>Telefono</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjTelefonoProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='EmailProforma' id='EmailProforma' autocomplete='off' required>
                                <label for='EmailProforma'>Email</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjEmailProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='contacto1Proforma' id='contacto1Proforma' autocomplete='off' required>
                                <label for='contacto1Proforma'>Contacto 1</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjcontacto1Proforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='contacto2Proforma' id='contacto2Proforma' autocomplete='off' required>
                                <label for='contacto2Proforma'>Contacto 2</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjcontacto2Proforma"></small>
                            </div>
                        </div>
                        <div class="col-5">
                            <h4>Datos Direccion cliente</h4>
                            <div class="grupo-login">
                                <input type='text' name='calleProforma' id='calleProforma' autocomplete='off' required>
                                <label for='calleProforma'>Calle</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjcalleProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='number' name='numeroProforma' id='numeroProforma' autocomplete='off' required>
                                <label for='numeroProforma'>Numero</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjnumeroProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='localidadProforma' id='localidadProforma' autocomplete='off' required>
                                <label for='localidadProforma'>Localidad</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjlocalidadProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='provinciaProforma' id='provinciaProforma' autocomplete='off' required>
                                <label for='provinciaProforma'>Provincia</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjprovinciaProforma"></small>
                            </div>
                            <div class="grupo-login">
                                <input type='text' name='paisProforma' id='paisProforma' autocomplete='off' required>
                                <label for='paisProforma'>País</label>
                                <span class="input-bar"></span>
                                <small class="mensajeError" id="msjPaisProforma"></small>
                            </div>
                        </div>
                        <input type='submit' class="input-submit" id="inputCliente" value='Enviar' class="ml-5">
                        <form>
                </div>
                <!-- Modal footer -->
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                </div>

            </div>
        </div>
    </div>


