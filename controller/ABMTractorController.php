<?php
class ABMTractorController
{
    private $ABMTractorModel;
    private $render;

    public function __construct($ABMTractorModel, $render){
        $this->ABMTractorModel = $ABMTractorModel;
        $this->render = $render;
    }

    public function execute(){
        $data["tractor"] = $this->ABMTractorModel->traerTractor();
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ABMTractorView.php", $data);
        } else {
            echo "Usuario no es super";
        }
    }

    public function darBaja(){
        $patenteTractor = isset($_POST['patenteTractor']) ? $_POST['patenteTractor'] : "";
        if($patenteTractor != ""){
            $this->ABMTractorModel->darBaja($patenteTractor);
            header("Location:/ABMTractor");
        }
        else{
            echo $this->render->render("view/registerView.php");
        }
    }
    
    public function modificar(){
        $patenteTractor = $_POST['patenteTractor'];
        $marcaTractor = $_POST['marca'];
        $modeloTractor = $_POST['modelo'];
        $motorTractor = $_POST['motor'];
        $chasisTractor = $_POST['chasis'];
            $this->ABMTractorModel->modificar($patenteTractor, $marcaTractor, $modeloTractor, $motorTractor, $chasisTractor);
            header("Location:/ABMTractor");
    }

    public function agregar(){
        $patenteTractor = isset($_POST['patenteTractor']) ? $_POST['patenteTractor'] : "";
        $marcaTractor = isset($_POST['marca']) ? $_POST['marca'] : "";
        $modeloTractor = isset($_POST['modelo']) ? $_POST['modelo'] : "";
        $motorTractor = isset($_POST['motor']) ? $_POST['motor'] : "";
        $chasisTractor = isset($_POST['chasis']) ? $_POST['chasis'] : "";
        $this->ABMTractorModel->agregar($patenteTractor, $marcaTractor, $modeloTractor, $motorTractor, $chasisTractor);
        header("Location:/ABMTractor");
    }
}
?>