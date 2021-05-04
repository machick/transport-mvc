<?php 
class ABMTractorModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerTractor(){
        return $this->database->query("SELECT * FROM `grupo02`.`tractor`;");
    }

    public function darBaja($patenteTractor){
        $this->database->queryInsert("DELETE FROM `tractor` WHERE `patenteTractor`='$patenteTractor'");
    }

    public function modificar($patenteTractor, $marcaTractor, $modeloTractor, $motorTractor, $chasisTractor){
        $this->database->queryInsert("UPDATE `grupo02`.`tractor` SET `marca` = '$marcaTractor' WHERE `patenteTractor` = '$patenteTractor';");
        $this->database->queryInsert("UPDATE `grupo02`.`tractor` SET `modelo` = '$modeloTractor' WHERE `patenteTractor` = '$patenteTractor';");
        $this->database->queryInsert("UPDATE `grupo02`.`tractor` SET `motor` = '$motorTractor' WHERE `patenteTractor` = '$patenteTractor';");
        $this->database->queryInsert("UPDATE `grupo02`.`tractor` SET `chasis` = '$chasisTractor' WHERE `patenteTractor` = '$patenteTractor';");
    }

    public function agregar($patenteTractor, $marcaTractor, $modeloTractor, $motorTractor, $chasisTractor){
        $this->database->queryInsert("INSERT INTO `grupo02`.`tractor` (`patenteTractor`, `marca`, `modelo`, `motor`, `chasis`) 
                                        VALUES ('$patenteTractor', '$marcaTractor', '$modeloTractor', '$motorTractor', '$chasisTractor');");
    }
}