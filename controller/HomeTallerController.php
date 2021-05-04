<?php
class HomeTallerController
{
    private $homeTallerModel;
    private $render;

    public function __construct($homeTallerModel, $render){
        $this->homeTallerModel = $homeTallerModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "encargadoTaller") {
            echo $this->render->render("view/homeTallerView.php");
        } else {
            echo "Usuario no es encargado";
        }

    }
    public function mantenimiento(){
        if ($_SESSION["rolLogeado"] == "encargadoTaller") {
            $data["tractores"]=$this->homeTallerModel->obtenerPatentesTractores();
            $data["taller"]=$this->homeTallerModel->consultarTaller();
            echo $this->render->render("view/mantenimientoView.php",$data);
        } else {
            echo "Usuario no es encargado";
        }
    }
    public function service(){
        if ($_SESSION["rolLogeado"] == "encargadoTaller") {
            $data["service"]=$this->homeTallerModel->consultarService();
            echo $this->render->render("view/serviceView.php",$data);
        } else {
            echo "Usuario no es encargado";
        }
    }
    public function mandarTaller(){
        $this->homeTallerModel->mandarAMantenimiento($_POST["patente"],$_POST["fechaEntrada"]);
        header("Location:/HomeTaller/mantenimiento");
    }
    public function mandarAService(){
        $this->homeTallerModel->finalizarTrabajo($_POST["patente"],$_POST["fechaEgreso"],$_POST["costoMantenimiento"],$_POST["repuestosCambiados"],$_POST["descripcion"]);
        header("Location:/HomeTaller/service");
    }
}
?>