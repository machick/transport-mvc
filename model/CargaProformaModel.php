<?php
class CargaProformaModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function insertaDireccion($calleProforma,$numeroProforma,$localidadProforma,$provinciaProforma,$paisProforma){
        $this->database->queryInsert("INSERT INTO direccion (`calle`,`numero`,`localidad`,`provincia`,`pais`)VALUES('$calleProforma','$numeroProforma','$localidadProforma','$provinciaProforma','$paisProforma')");
        $idDireccion= $this->database->query("SELECT idDireccion FROM direccion WHERE `calle` = '$calleProforma'
                                                                        AND `numero` = '$numeroProforma'
                                                                        AND `localidad` = '$localidadProforma'
                                                                        AND `provincia` = '$provinciaProforma'
                                                                        AND `pais` = '$paisProforma'");
        return $idDireccion[0]['idDireccion'];                                          
    }

    public function insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccion){
        $this->database->queryInsert("INSERT INTO cliente (`nombre`,`apellido`,`cuitOcuil`,`denominacion`,`telefono`,`email`,`contacto1`,`contacto2`,`fk_Cliente_Direccion`)VALUES('$clienteNombre','$clienteApellido','$clienteCuit','$clienteDenominacion','$clienteTelefono','$clienteEmail','$clienteContacto1','$clienteContacto2','$idDireccion')");
        $idCliente= $this->database->query("SELECT idCliente FROM cliente WHERE `nombre` = '$clienteNombre'
                                                                        AND `apellido` = '$clienteApellido'
                                                                        AND `cuitOcuil` = '$clienteCuit'
                                                                        AND `fk_Cliente_Direccion` = '$idDireccion'");
        return $idCliente[0]['idCliente'];   
    }

    public function insertaCarga($tipoCarga,$pesoCarga,$hazard,$claseHazard,$reefer,$temperaturaReefer){
        $this->database->queryInsert("INSERT INTO carga (`tipo`,`pesoNeto`,`hazard`,`claseHazard`,`reefer`,`temperaturaReefer`)VALUES('$tipoCarga','$pesoCarga','$hazard','$claseHazard','$reefer','$temperaturaReefer')");
        $idCarga= $this->database->query("SELECT idCarga FROM carga WHERE `tipo` = '$tipoCarga'
                                                                        AND `pesoNeto` = '$pesoCarga'
                                                                        AND `hazard` = '$hazard'
                                                                        AND `claseHazard` = '$claseHazard'
                                                                        AND `reefer` = '$reefer'
                                                                        AND `temperaturaReefer` = '$temperaturaReefer'
                                                                        ");
        return $idCarga[0]['idCarga'];   
    }

    public function insertaDatosEstimados($kilometrosEstimado,$combustiblesEstimado,$etd,$eta,$viaticoEstimado,$peypaEstimado,$extrasEstimado,$hazardEstimado,$reeferEstimado){
        $this->database->queryInsert("INSERT INTO `datosestimados`(`kilometrosEstimados`,`combustible`,`ETD`,`ETA`,`viatico`,`peaje_pasaje`,`extras`,`hazard`,`reefer`)
        VALUES('$kilometrosEstimado','$combustiblesEstimado','$etd','$eta','$viaticoEstimado','$peypaEstimado','$extrasEstimado','$hazardEstimado','$reeferEstimado')");
        $idDatosEstimados= $this->database->query("SELECT idDatosEstimados FROM datosestimados WHERE `kilometrosEstimados` = '$kilometrosEstimado'
                                                                        AND `combustible` = '$combustiblesEstimado'
                                                                        AND `ETD` = '$etd'
                                                                        AND `ETA` = '$eta'
                                                                        ");
        return $idDatosEstimados[0]['idDatosEstimados'];  
    }

    public function insertaProformaViaje($idCliente,$idDatosEstimados,$idDireccionOrigen,$idDireccionDestino,$idCarga){
        $this->database->queryInsert("INSERT INTO `viaje`(`fk_Viaje_Cliente`,`fk_Viaje_ViajeEstimado`,`fk_Viaje_Direccion_Origen`,`fk_Viaje_Direccion_Destino`,`fk_Viaje_Carga`)
        VALUES('$idCliente','$idDatosEstimados','$idDireccionOrigen','$idDireccionDestino','$idCarga')");
    }
    public function devolverUltimoViajeCreado(){
        return $this->database->query("select * from `grupo02`.`viaje` order by idViajeReal desc limit 1;");
    }

}

?>