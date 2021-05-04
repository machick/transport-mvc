<?php 
class EditUsuarioModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerUsuarios(){
        return $this->database->query("SELECT u.*, r.nombre as role FROM `grupo02`.`usuario` u inner join `grupo02`.`role` r on u.fk_Usuario_role = r.idRole ;");
    }

    public function traerUsuario($id){
        $queryResult = $this->database->query("SELECT * FROM `usuario` 
        WHERE idUsuario = $id");
        if (sizeof($queryResult) == 1){
            return $queryResult;
        }else{
            return false;
        }
    }

    public function traerLicencias($idUsuario){
        $queryResult = $this->database->query("SELECT * FROM `licencia` 
        WHERE fk_Licencia_Usuario = $idUsuario");
        return $queryResult;
    }

    public function insertaLicencia($idUsuario,$tipoLicencia,$descripcionLicencia){
        $this->database->queryInsert("INSERT INTO `grupo02`.`licencia`(`tipo`,`descripcion`,`fk_Licencia_Usuario`)
        VALUES('$tipoLicencia','$descripcionLicencia','$idUsuario');");
    }

    public function updateCliente($idUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$TelefonoUsuario,$EmailUsuario){
        $this->database->queryInsert("UPDATE `grupo02`.`usuario`
        SET
        `nombre` = '$nombreUsuario',
        `apellido` = '$apellidoUsuario',
        `documento` = '$documentoUsuario',
        `telefono` = '$TelefonoUsuario',
        `email` = '$EmailUsuario'
        WHERE `idUsuario` = $idUsuario;");
    }

    public function deleteLicencia($idLicencia){
        $this->database->queryInsert("DELETE FROM `grupo02`.`licencia` WHERE `idLicencia` = '$idLicencia';");
    }
}