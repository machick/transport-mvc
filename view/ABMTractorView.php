{{> headerSuper}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<br>
<h1>Vehiculos</h1>
<section class="contenedor-login" style="margin-left: 70px">
<section>
  <!--for demo wrap-->
  <h2>Tractores</h2>
  <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#agregar{{patenteTractor}}'>
                Agregar
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='agregar{{patenteTractor}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Agregar Tractor</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <form  action='/ABMTractor/agregar' enctype='multipart/form-data' method='post'>
                                    <label>Patente</label>
                                    <input type="text" name="patenteTractor"><br>
                                    <label>Marca</label>
                                    <input type="text" name ="marca"><br>
                                    <label>Modelo</label>
                                    <input type="text" name ="modelo"><br>
                                    <label>Motor</label>
                                    <input type="text" name ="motor"><br>
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
          <th>Marca</th>
          <th>Modelo</th>
          <th>Motor</th>
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
{{#tractor}}
        <tr>
          <td>{{patenteTractor}} </td>
          <td>{{marca}}</td>
          <td>{{modelo}}</td>
          <td>{{motor}}</td>
          <td>{{chasis}}</td>
          <td>
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#modificar{{patenteTractor}}'>
                <i class="fas fa-tools"></i>
                </button>
                <!--boton modificar -->
                <div class='modal fade' id='modificar{{patenteTractor}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Modificar Tractor</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Modificando a {{patenteTractor}}</h5>
                                <form  action='/ABMTractor/modificar' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="patenteTractor" value="{{patenteTractor}}">
                                    <label>Marca</label>
                                    <input type="text" name ="marca" value="{{marca}}"><br>
                                    <label>Modelo</label>
                                    <input type="text" name ="modelo" value="{{modelo}}"><br>
                                    <label>Motor</label>
                                    <input type="text" name ="motor" value="{{motor}}"><br>
                                    <label>Chasis</label>
                                    <input type="text" name ="chasis" value="{{chasis}}"><br>
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
                <button type='button' class='btn btn-info m-2' data-toggle='modal' data-target='#borrar{{patenteTractor}}'>
                <i class="fas fa-ban"></i>
                </button>
                <!--boton borrar -->
                <div class='modal fade' id='borrar{{patenteTractor}}'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <!-- Modal Header -->
                            <div class='modal-header'>
                                <h4 class='modal-title'>Eliminar Tractor</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class='modal-body'>
                                <h5>Esta seguro que quiere eliminar a {{patenteTractor}} ?</h5>
                                <form  action='/ABMTractor/darBaja' enctype='multipart/form-data' method='post'>
                                    <input type="hidden" name="patenteTractor" value="{{patenteTractor}}">
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
{{/tractor}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}