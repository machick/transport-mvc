<?php 
class ActualizarProformaModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    // public function traerUsuarios(){
    //     return $this->database->query("SELECT u.*, r.nombre as role FROM `grupo02`.`usuario` u inner join `grupo02`.`role` r on u.fk_Usuario_role = r.idRole ;");
    // }

    public function actualizarUbicacionDeViaje($idViaje,$latitud,$longitud){
        $this->database->queryInsert("INSERT INTO `grupo02`.`ubicaciones`
(
`idViaje`,
`latitud`,
`longitud`)
VALUES
(
'$idViaje',
'$latitud',
'$longitud');
");
    }


    public function insertar($kilometros,$combustible,$ETD,$ETA,$viaticos,$PeajePasaje,$extras,$Hazard,$Reefer){

        $this->database->queryInsert("INSERT INTO `grupo02`.`datosreal`(`kilometrosReal`,`combustible`,`ETD`,`ETA`,`viatico`,`peaje_pasaje`,`extras`,`hazard`,`reefer`)VALUES
        ('$kilometros','$combustible','$ETD','$ETA','$viaticos','$PeajePasaje','$extras','$Hazard','$Reefer')");
        $idDatosReal= $this->database->query("SELECT idDatosReal FROM datosreal WHERE `kilometrosReal` = '$kilometros'
                                                                        AND `combustible` = '$combustible'
                                                                        AND `ETD` = '$ETD'
                                                                        AND `ETA` = '$ETA'
                                                                        AND `viatico` = '$viaticos'
                                                                        AND `peaje_pasaje` = '$PeajePasaje'
                                                                        AND `extras` = '$extras'
                                                                        AND `hazard` = '$Hazard'
                                                                        AND `reefer` = '$Reefer'");
        return $idDatosReal[0]['idDatosReal'];   
    }

    public function actualizarViaje($idDatosReales, $idViaje){
        $this->database->execute("UPDATE `grupo02`.`viaje` SET
        `idViajeReal` = '$idDatosReales'
        WHERE `idViajeReal` = '$idViaje'");
    }
    
}