{{> headerSuper}}
<section  style="margin-left: 80px;">
    <div class="row">
        <div class="col-xl-6" >
            <h1>Ubicacion de viaje</h1><br><br>
            <h3>{{error}}</h3><br>

            <iframe src="https://maps.google.com/?q={{latitud}},{{longitud}}&z=15&t=m&output=embed" width="600" height="400" frameborder="0" style="border:0" tabindex="1" allowfullscreen></iframe>

        </div>
        <div class="col-xl-6" >
            <h1>datos del viaje</h1>
            <br>
            {{#datos}}

            <strong>Nombre completo: </strong>{{nombre}} {{apellido}} <strong> Denominacion: </strong>{{denominacion}}<br>
            <strong>Cuil: </strong>{{cuitOcuil}} <strong>Telefono: </strong>{{telefono}}<br>
            <strong>Email: </strong>{{email}}<br>
            <strong>Contacto 1: </strong>{{contacto1}}<br>
            <strong>Contacto 2: </strong>{{contacto2}}<br>
            <hr>
            <strong>Direccion origen: </strong>{{calle_origen}} {{numero_origen}}<br>
            <strong>Lugar origen: </strong>{{localidad_origen}} , {{provincia_origen}} , {{pais_origen}}<br>
            <hr>
            <strong>Direccion destino: </strong>{{calle_destino}} {{numero_destino}}<br>
            <strong>Lugar destino: </strong>{{localidad_destino}} , {{provincia_destino}} , {{pais_destino}}<br>
            <hr>
            <strong>Tipo de carga: </strong>{{tipoDeCarga}}<br>
            <strong>Peso neto de carga: </strong>{{pesoNetoDeCarga}}<br>
            <strong>{{hazarCarga}} clase: {{claseHazardCarga}}</strong><br>
            <strong>{{reeferCarga}} temperatura: {{temperaturaReeferCarga}}</strong>
            <hr>
            <strong>Kilometros estimados: </strong>{{kilometrosEstimados}}
            <strong>Combustible estimados: </strong>{{combustible}}<br>
            <strong>Tiempo estimado de salida: </strong>{{ETD}}<br>
            <strong>Tiempo estimado de llegada: </strong>{{ETA}}<br>
            <strong>Gasto estimado viatico: </strong>{{viatico}}<br>
            <strong>Gasto estimado peaje/pasaje: </strong>{{peaje_pasaje}}<br>
            <strong>Gasto estimado extras: </strong>{{extras}}<br>
            <strong>Gasto estimado hazard: </strong>{{hazard}}<br>
            <strong>Gasto estimado reefer: </strong>{{reefer}}<br>
            <br>
            {{/datos}}
        </div>
    </div>


</section>
{{> footer}}
