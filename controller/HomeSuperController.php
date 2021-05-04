<?php
class HomeSuperController
{
    private $homeSuperModel;
    private $render;

    public function __construct($homeSuperModel, $render){
        $this->homeSuperModel = $homeSuperModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/homeSuperView.php");
        } else {
            echo "Usuario no es supervisor";
        }

    }
    public function verViajes(){
        if ($_SESSION["rolLogeado"] == "supervisor") {
            $data["viajes"]= $this->homeSuperModel->obtenerGrillaViajes();
            echo $this->render->render("view/ubicacionSuperView.php",$data);
        } else {
            echo "Usuario no es supervisor";
        }
    }
    public function mostrarDatosDeViaje(){

        if ($_SESSION["rolLogeado"] == "supervisor") {

            $ubicacion=$this->homeSuperModel->obtenerUbicacionDeViaje($_POST["idViaje"]);
            isset($ubicacion[0]["latitud"]) ? $data["latitud"] = $ubicacion[0]["latitud"] : $data["latitud"] =false;
            isset($ubicacion[0]["longitud"]) ? $data["longitud"] = $ubicacion[0]["longitud"] : $data["longitud"] =false;

            $data["datos"]=$this->homeSuperModel->obtenerDatosDeViaje($_POST["idViaje"]);
            if ($data["latitud"] == false || $data["longitud"] == false){
                $data["error"]="no se encuentran datos de ubicacion";
            }
            echo $this->render->render("view/mostrarUbicacionView.php",$data);
        } else {
            echo "Usuario no es supervisor";
        }
    }
}
?>