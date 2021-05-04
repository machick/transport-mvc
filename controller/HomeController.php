<?php
class HomeController
{
    private $HomeModel;
    private $render;

    public function __construct($HomeModel, $render){
        $this->HomeModel = $HomeModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuario"] = $this->registerModel->getUsuarios();
        echo $this->render->render("view/registerView.php", $data);
    }

    public function darAlta(){
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "";
        if($nombreUsuario != ""){
            $this->homeModel->darAlta($nombreUsuario);
            echo $this->render->render("view/home.php");
        }
        else{
            echo $this->render->render("view/registerView.php");
        }
    }
}
?>