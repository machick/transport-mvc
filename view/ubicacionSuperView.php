{{> headerSuper}}
<link rel="stylesheet" href="../public/css/tablaUsuarios.css">
<section  style="margin-left: 80px;">

<!--    <h1 >Ingrese datos de viaje</h1><br><br>-->
<!--    <form action="/HomeSuper/mostrarUbicacion" method="post" >-->
<!--        <input class="form-control" name="idViaje" min="1" type="number" required placeholder="Ingrese id viaje">-->
<!--        <input class="form-control bg-primary text-light mt-3" type="submit" value="Consultar ubicacion">-->
<!--    </form>-->
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>id viaje real</th>
                <th>cliente</th>
                <th>vehiculo</th>

                <th>direccion destino</th>
                <th></th>
            </tr>
            </thead>
        </table>
    </div>
        <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
    {{#viajes}}
    <tr>
        <td>{{idViajeReal}}</td>
        <td>{{nombre}} {{apellido}} </td>
        <td>{{fk_Viaje_Vehiculo}}</td>
        <td>{{calle_destino}} {{numero_destino}}</td>
        <td>
            <form  action='/HomeSuper/mostrarDatosDeViaje' enctype='multipart/form-data' method='post'>
                <input type="hidden" name="idViaje" value="{{idViajeReal}}">
                <input class='btn btn-info text-center' type='submit' value='VER'>
            </form></td>
    </tr>
    {{/viajes}}
            </tbody>
        </table>
    </div>
</section>
{{> footer}}
