{{>header}}
<html>
<head>
    <title>Pdf creado</title>
</head>
<body>
<div style="margin-left: 80px;">
<h1>La proforma de {{nombre}} {{apellido}} <br>esta lista presione para ver/descargar pdf</h1>
<form  action='/CargaProforma/imprimirProforma' enctype='multipart/form-data' method='post'>
    <input type="hidden" value="{{idViajeCreado}}" name="idViajeCreado">
    <input type="hidden" value="{{nombre}}" name="nombre">
    <input type="hidden" value="{{apellido}}" name="apellido">
    <input type="hidden" value="{{denominacion}}" name="denominacion">
    <input type="hidden" value="{{cuit}}" name="cuit">
    <input type="hidden" value="{{telefono}}" name="telefono">
    <input type="hidden" value="{{email}}" name="email">
    <input type="hidden" value="{{contacto1}}" name="contacto1">
    <input type="hidden" value="{{contacto2}}" name="contacto2">
    <input type="hidden" value="{{calleC}}" name="calleC">
    <input type="hidden" value="{{numeroC}}" name="numeroC">
    <input type="hidden" value="{{localidadC}}" name="localidadC">
    <input type="hidden" value="{{provinciaC}}" name="provinciaC">
    <input type="hidden" value="{{paisC}}" name="paisC">
    <input type="hidden" value="{{calleO}}" name="calleO">
    <input type="hidden" value="{{numeroO}}" name="numeroO">
    <input type="hidden" value="{{localidadO}}" name="localidadO">
    <input type="hidden" value="{{provinciaO}}" name="provinciaO">
    <input type="hidden" value="{{paisO}}" name="paisO">
    <input type="hidden" value="{{calleD}}" name="calleD">
    <input type="hidden" value="{{numeroD}}" name="numeroD">
    <input type="hidden" value="{{localidadD}}" name="localidadD">
    <input type="hidden" value="{{provinciaD}}" name="provinciaD">
    <input type="hidden" value="{{paisD}}" name="paisD">
    <input type="hidden" value="{{tipoCarga}}" name="tipoCarga">
    <input type="hidden" value="{{pesoCarga}}" name="pesoCarga">
    <input type="hidden" value="{{hazard}}" name="hazard">
    <input type="hidden" value="{{claseHazar}}" name="claseHazar">
    <input type="hidden" value="{{reefer}}" name="reefer">
    <input type="hidden" value="{{temperaturaReefer}}" name="temperaturaReefer">
    <input type="hidden" value="{{kmE}}" name="kmE">
    <input type="hidden" value="{{combustibleE}}" name="combustibleE">
    <input type="hidden" value="{{etd}}" name="etd">
    <input type="hidden" value="{{eta}}" name="eta">
    <input type="hidden" value="{{viaticoE}}" name="viaticoE">
    <input type="hidden" value="{{peajeypasajeE}}" name="peajeypasajeE">
    <input type="hidden" value="{{extrasE}}" name="extrasE">
    <input type="hidden" value="{{costoHazarE}}" name="costoHazarE">
    <input type="hidden" value="{{costoReeferE}}" name="costoReeferE">


    <input type="submit" class="btn btn-info" value="Ver/Descargar PDF">

</form>
</div>
</body>
</html>
