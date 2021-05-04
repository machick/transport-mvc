{{> header}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h1>Registro de Usuarios</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>nombre</th>
          <th>apellido</th>
          <th>documento</th>
          <th>nombre de usuario</th>
          <th>rol</th>
          <th>estado</th>
          <th>editar</th>
          <th>eliminar</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
{{#usuarios}}
        <tr>
          <td>{{nombre}}</td>
          <td>{{apellido}} </td>
          <td>{{documento}}</td>
          <td>{{nombreUsuario}}</td>
          <td>{{role}}</td>
          <td>{{estado}}</td>
            <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{nombreUsuario}}'>
                <i class="fas fa-user-edit"></i>
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='modificar{{nombreUsuario}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Modificar Usuario</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Modificando a {{nombreUsuario}}</h5>
                                <form  action='/ABMUsuarios/modificarRol' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="nick" value="{{nombreUsuario}}">
                                    <label>Modificar rol</label>
                                    <select class='form-control  mt-2' name="rol" required>
                                        <option value=''>Elige rol</option>
                                        <option>admin</option>
                                        <option>chofer</option>
                                        <option>supervisor</option>
                                        <option value="encargadoTaller">encargado</option>
                                        <option>sin rol</option>
                                    </select>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Modificar rol'>
                                </form><br>
                                <form  action='/ABMUsuarios/modificarEstado' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="nick" value="{{nombreUsuario}}">
                                    <label>Modificar estado</label>
                                    <select class='form-control  mt-2' name="estado" required>
                                        <option value=''>Elige estado</option>
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                    </select>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Modificar estado'>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div></td>
                <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#borrar{{nombreUsuario}}'>
                <i class="fas fa-user-slash"></i>
                </button>
                <!--boton borrar -->
                <div class='modal fade' id='borrar{{nombreUsuario}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Eliminar Usuario</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Esta seguro que quiere eliminar a {{nombreUsuario}} ?</h5>
                                <form  action='/ABMUsuarios/darBaja' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="nombreUsuario" value="{{nombreUsuario}}">
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
{{/usuarios}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}