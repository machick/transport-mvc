<?php
class homeModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function darAlta($nombreUsuario){
        $this->database->queryInsert("UPDATE `usuario` SET `estado` = 1 WHERE `nombreUsuario` = '$nombreUsuario'");
    }
}
?>