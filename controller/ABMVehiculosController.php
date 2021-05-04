<?php
class ABMVehiculosController
{
    private $ABMVehiculosModel;
    private $render;

    public function __construct($ABMVehiculosModel, $render){
        $this->ABMVehiculosModel = $ABMVehiculosModel;
        $this->render = $render;
    }

    public function execute(){
        $data["arrastrados"] = $this->ABMVehiculosModel->traerArrastrado();
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ABMVehiculosView.php", $data);
        } else {
            echo "Usuario no es super";
        }
    }
}
?>