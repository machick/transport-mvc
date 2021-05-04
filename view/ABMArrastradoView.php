{{> headerSuper}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<br>
<h1>Vehiculos</h1>
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h2>Arrastrados</h2>
  <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#agregar{{patenteArrastrado}}'>
                Agregar
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='agregar{{patenteArrastrado}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Agregar Arrastrado</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <form  action='/ABMArrastrado/agregar' enctype='multipart/form-data' method='post'>
                                    <label>Patente</label>
                                    <input type="text" name="patenteArrastrado"><br>
                                    <label>Tipo</label>
                                    <input type="text" name ="tipo"><br>
                                    <label>Chasis</label>
                                    <input type="text" name ="chasis"><br>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Agregar'>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Patente</th>
          <th>Tipo</th>
          <th>Chasis</th>
          <th>editar</th>
          <th>eliminar</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
{{#arrastrados}}
        <tr>
          <td>{{patenteArrastrado}} </td>
          <td>{{tipo}}</td>
          <td>{{chasis}}</td>
          <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{patenteArrastrado}}'>
                <i class="fas fa-tools"></i>
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='modificar{{patenteArrastrado}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Modificar Arrastrado</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Modificando a {{patenteArrastrado}}</h5>
                                <form  action='/ABMArrastrado/modificar' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="patente2" value="{{patenteArrastrado}}">
                                    <label>Tipo</label>
                                    <input type="text" value='{{tipo}}' name="tipo"><br>
                                    <label>Chasis</label>
                                    <input type="text" value='{{chasis}}' name="tipo"><br>
                                    <input class='btn btn-info ml-1 text-center mt-2' type='submit' value='Modificar'>
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
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#borrar{{patenteArrastrado}}'>
                <i class="fas fa-ban"></i>
                </button>
                <!--boton borrar -->
                <div class='modal fade' id='borrar{{patenteArrastrado}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Eliminar Arrastrado</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Esta seguro que quiere eliminar a {{patenteArrastrado}} ?</h5>
                                <form  action='/ABMArrastrado/darBaja' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="patente" value="{{patenteArrastrado}}">
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
{{/arrastrados}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}