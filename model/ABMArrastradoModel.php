<?php 
class ABMArrastradoModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    
    public function traerArrastrado(){
        return $this->database->query("SELECT * FROM `grupo02`.`arrastrado`;");
    }

    public function darBaja($patenteArrastrado){
        $this->database->queryInsert("DELETE FROM `arrastrado` WHERE `patenteArrastrado`='$patenteArrastrado'");
    }

    public function modificar($patenteArrastrado2, $tipoArrastrado, $chasisArrastrado){
        $this->database->queryInsert("UPDATE `grupo02`.`arrastrado` SET `tipo` = '$tipoArrastrado' WHERE `patenteArrastrado` = '$patenteArrastrado2';");
        $this->database->queryInsert("UPDATE `grupo02`.`arrastrado` SET `chasis` = '$chasisArrastrado' WHERE `patenteArrastrado` = '$patenteArrastrado2';");
    }

    public function agregar($patenteArrastrado, $tipoArrastrado, $chasisArrastrado){
        $this->database->queryInsert("INSERT INTO `grupo02`.`arrastrado` (`patenteArrastrado`, `tipo`, `chasis`) 
                                        VALUES ('$patenteArrastrado', '$tipoArrastrado', '$chasisArrastrado');");
    }
}