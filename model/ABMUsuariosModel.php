<?php 
class ABMUsuariosModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerUsuarios(){
        return $this->database->query("SELECT u.*, r.nombre as role FROM `grupo02`.`usuario` u inner join `grupo02`.`role` r on u.fk_Usuario_role = r.idRole ;");
    }
    public function modificarRolDeUsuario($usuario,$rol){
        return $this->database->queryInsert("UPDATE `grupo02`.`usuario` SET `fk_Usuario_Role` = (SELECT idRole FROM `role` WHERE nombre ='$rol') WHERE `nombreUsuario` ='$usuario';");
    }

    public function modificarEstadoDeUsuario($nombreUsuario,$estadoElegido){
        $estado=null;
        if ($estadoElegido == "Activo"){
            $estado=1;
        }
        if ($estadoElegido == "Inactivo"){
            $estado=0;
        }
        return $this->database->queryInsert("UPDATE `grupo02`.`usuario` SET `estado` = '$estado' WHERE `nombreUsuario` = '$nombreUsuario';");
    }
    
    public function darBaja($nombreUsuario){
        $this->database->queryInsert("UPDATE `usuario` SET `estado` = 0 WHERE `nombreUsuario` = '$nombreUsuario'");
    }
}