<?php 
class ABMUsuariosSuperModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerUsuarios(){
        return $this->database->query("SELECT u.*, r.nombre as role FROM `grupo02`.`usuario` u inner join `grupo02`.`role` r on u.fk_Usuario_role = r.idRole ;");
    }
}