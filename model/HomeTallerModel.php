<?php 
class HomeTallerModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function obtenerPatentesArrastrados(){
        return $this->database->query("SELECT patenteArrastrado FROM grupo02.arrastrado;");
    }
    public function obtenerPatentesTractores(){
        return $this->database->query("SELECT patenteTractor FROM grupo02.tractor;");
    }
    public function mandarAMantenimiento($patente,$fechaEntrada){
        return $this->database->queryInsert("INSERT INTO `grupo02`.`mantenimientotaller`(`fechaIngreso`,`estadoMantenimiento`,`patenteMantenimiento`)VALUES('$fechaEntrada','en reparacion','$patente');");
    }
public function consultarTaller()
{
    return $this->database->query("SELECT * FROM grupo02.mantenimientoTaller where estadoMantenimiento='en reparacion';");
}
    public function finalizarTrabajo($patente,$fechaEgreso,$costo,$repuestos,$descripcion){
        $this->database->queryInsert("UPDATE `grupo02`.`mantenimientotaller`
SET
`fechaEgreso` = '$fechaEgreso',
`costoMantenimiento` = '$costo',
`estadoMantenimiento` = 'finalizado',
`repuestosCambiados` = '$repuestos',
`descripcion` = '$descripcion'
WHERE `patenteMantenimiento` ='$patente' ;");
    }
    public function consultarService()
    {
        return $this->database->query("SELECT  t.*, m.* 
            FROM `grupo02`.`mantenimientotaller` m
            inner join grupo02.tractor t on t.patenteTractor= m.patenteMantenimiento 
            where estadoMantenimiento='finalizado'
;");
    }
}