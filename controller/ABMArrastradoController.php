<?php
class ABMArrastradoController
{
    private $ABMArrastradoModel;
    private $render;

    public function __construct($ABMArrastradoModel, $render){
        $this->ABMArrastradoModel = $ABMArrastradoModel;
        $this->render = $render;
    }

    public function execute(){
        $data["arrastrados"] = $this->ABMArrastradoModel->traerArrastrado();
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ABMArrastradoView.php", $data);
        } else {
            echo "Usuario no es super";
        }
    }

    public function darBaja(){
        $patenteArrastrado = isset($_POST['patente']) ? $_POST['patente'] : "";
        if($patenteArrastrado != ""){
            $this->ABMArrastradoModel->darBaja($patenteArrastrado);
            header("Location:/ABMArrastrado");
        }
        else{
            echo $this->render->render("view/registerView.php");
        }
    }
    
    public function modificar(){
        $patenteArrastrado2 = $_POST['patente2'];
        $tipoArrastrado = $_POST['tipo'];
        $chasisArrastrado = $_POST['chasis'];
            $this->ABMArrastradoModel->modificar($patenteArrastrado2, $tipoArrastrado, $chasisArrastrado);
            header("Location:/ABMArrastrado");
    }

    public function agregar(){
        $patenteArrastrado = isset($_POST['patenteArrastrado']) ? $_POST['patenteArrastrado'] : "";
        $tipoArrastrado = isset($_POST['tipo']) ? $_POST['tipo'] : "";
        $chasisArrastrado = isset($_POST['chasis']) ? $_POST['chasis'] : "";
        $this->ABMArrastradoModel->agregar($patenteArrastrado, $tipoArrastrado, $chasisTractor);
        header("Location:/ABMArrastrado");
    }
}
?>