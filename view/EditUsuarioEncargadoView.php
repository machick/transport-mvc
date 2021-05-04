{{> headerTaller}}
{{#usuario}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<div style="margin-left: 70px">
    <h2>Editar Mis Datos</h2>
    
    <!-- <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#agregar'>
    Agregar Licencia
    </button> -->
<form  action='/EditUsuario/updateUsuario' enctype='multipart/form-data' method='post' class="row ml-5">
        <div class="col-10">
        <input type="text" name='idUsuario' id='idUsuario' value='{{idUsuario}}' hidden>
            <div class="grupo-login" >
                <input type='text' name='nombreUsuario' id='nombreUsuario' value='{{nombre}}' autocomplete='off'>
                <label for='nombreUsuario'>Nombre</label>
                <span class="input-bar"></span>
                <small class="mensajeError" id="msjnombreUsuario"></small>
            </div>
            <div class="grupo-login">
                <input type='text' name='apellidoUsuario' id='apellidoUsuario' value='{{apellido}}' autocomplete='off'>
                <label for='apellidoUsuario'>Apellido</label>
                <span class="input-bar"></span>
                <small class="mensajeError" id="msjapellidoUsuario"></small>
            </div>
            <div class="grupo-login">
                <input type='number' name='documentoUsuario' id='documentoUsuario' value='{{documento}}' autocomplete='off'>
                <label for='documentoUsuario'>Documento</label>
                <span class="input-bar"></span>
                <small class="mensajeError" id="msjdocumentoUsuario"></small>
            </div>
            <div class="grupo-login">
                <input type='number' name='TelefonoUsuario' id='TelefonoUsuario' value='{{telefono}}' autocomplete='off'>
                <label for='TelefonoUsuario'>Telefono</label>
                <span class="input-bar"></span>
                <small class="mensajeError" id="msjTelefonoUsuario"></small>
            </div>
            <div class="grupo-login">
                <input type='text' name='EmailUsuario' id='EmailUsuario' value='{{email}}' autocomplete='off'>
                <label for='EmailUsuario'>Email</label>
                <span class="input-bar"></span>
                <small class="mensajeError" id="msjEmailUsuario"></small>
            </div>
            <input type='submit' class="input-submit" id="inputUsuario" value='Editar' class="ml-5">
        </div>
            
        </form>
    
</div>

<!--boton modificar -->
<div class='modal fade' id='agregar'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <!-- Modal Header -->
            <div class='modal-header'>
                <h4 class='modal-title'>Agregar Licencia</h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <!-- Modal body -->
            <div class='modal-body'>
                <form  action='/EditUsuario/insertaLicencia' enctype='multipart/form-data' method='post' class="row ml-5">
                <div class="col-12">
                <h4>Agregar Licencia</h4>
                <input type="text" name='idUsuario' id='idUsuario' value='{{idUsuario}}' hidden>
                    <div class="grupo-login" >
                        <input type='text' name='tipoLicencia' id='tipoLicencia' autocomplete='off' required>
                        <label for='tipoLicencia'>Tipo</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjtipoLicencia"></small>
                    </div>
                    <div class="grupo-login">
                        <input type='text' name='descripcionLicencia' id='descripcionLicencia' autocomplete='off' required>
                        <label for='descripcionLicencia'>Descripcion</label>
                        <span class="input-bar"></span>
                        <small class="mensajeError" id="msjdescripcionLicencia"></small>
                    </div>
                    <input type='submit' class="input-submit" id="inputLicencia" value='Enviar' class="ml-5">
                    </div>
                <form>
            </div>
            <!-- Modal footer -->
            <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
            </div>

        </div>
    </div>
</div>
{{/usuario}}
<!-- <section style="margin-left: 70px">
<h1>Registro de Licencias</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Tipo</th>
          <th>Descripcion</th>
          <th>Eliminar</th>
        </tr>
      </thead>
    </table>
  </div>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    {{#licencias}}
      <tbody>
        <tr>
          <td>{{tipo}}</td>
          <td>{{descripcion}}</td>
            <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#borrar{{idLicencia}}'>
                <i class="fas fa-user-slash"></i>
                </button>
                <div class='modal fade' id='borrar{{idLicencia}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h4 class='modal-title'>Eliminar Cliente</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <div class='modal-body'>
                                <h5>Esta seguro que quiere eliminar la licencia?</h5>
                                <form  action='/EditUsuario/deleteLicencia' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="idLicencia" value="{{idLicencia}}">
                                    <input class='btn btn-info ml-5 text-center mt-2' type='submit' value='Eliminar'>
                                </form><br>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </td>
        </tr>
        {{/licencias}}
      </tbody>
    </table>
  </div>
</section> -->