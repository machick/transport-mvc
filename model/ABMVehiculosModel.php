<?php 
class ABMVehiculosModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }
    public function traerArrastrado(){
        $query1 = $this->database->query("SELECT * FROM `grupo02`.`arrastrado`;");
        $query2 = $this->database->query("SELECT * FROM `grupo02`.`tractor`;");
        return $query1;
    }
}