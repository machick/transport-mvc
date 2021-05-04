{{> headerSuper}}
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
        </tr>
{{/usuarios}}
      </tbody>
    </table>
  </div>
</section>

{{> footer}}