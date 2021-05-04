<?php 
class HomeSuperModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function obtenerUbicacionDeViaje($idViaje){
        return $this->database->query("SELECT * FROM grupo02.ubicaciones where idViaje='$idViaje'
order by idUbicacion desc limit 1 ;");
    }
    public function obtenerGrillaViajes(){
        return $this->database->query("SELECT  v.idViajeReal, c.nombre, c.apellido  ,d.calle as calle_origen,d.numero as numero_origen,e.calle as calle_destino,e.numero as numero_destino 
FROM grupo02.viaje v  
inner join `grupo02`.`cliente` c on v.fk_Viaje_Cliente = c.idCliente 
inner join `grupo02`.`direccion` d on fk_Viaje_Direccion_Origen = d.idDireccion 
inner join `grupo02`.`direccion` e on fk_Viaje_Direccion_Destino = e.idDireccion ;");
    }

    public  function obtenerDatosDeViaje($idViaje){
        $datosViaje= $this->database->query("SELECT  v.idViajeReal, 
c.* ,est.* ,
o.calle as calle_origen,o.numero as numero_origen,o.localidad as localidad_origen,o.provincia as provincia_origen,o.pais as pais_origen,
d.calle as calle_destino,d.numero as numero_destino ,d.localidad as localidad_destino,d.provincia as provincia_destino,d.pais as pais_destino,
car.tipo as tipoDeCarga, car.pesoNeto as pesoNetoDeCarga, car.hazard as hazarCarga,car.claseHazard as claseHazardCarga,car.reefer as reeferCarga, car.temperaturaReefer as temperaturaReeferCarga
FROM grupo02.viaje v  
inner join `grupo02`.`cliente` c on v.fk_Viaje_Cliente = c.idCliente 
inner join `grupo02`.`datosestimados` est on v.fk_Viaje_ViajeEstimado = est.idDatosEstimados
inner join `grupo02`.`direccion` o on fk_Viaje_Direccion_Origen = o.idDireccion 
inner join `grupo02`.`direccion` d on fk_Viaje_Direccion_Destino = d.idDireccion 
inner join `grupo02`.`carga` car on fk_Viaje_Carga=car.idCarga
where idViajeReal='$idViaje'
;");
        return $datosViaje[0];
    }
}