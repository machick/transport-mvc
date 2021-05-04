<?php
class HomeAdminController
{
    private $homeAdminModel;
    private $render;

    public function __construct($homeAdminModel, $render){
        $this->homeAdminModel = $homeAdminModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "admin") {
            echo $this->render->render("view/homeAdminView.php");
        } else {
            echo "Usuario no es admin";
        }

    }

    public function darAlta(){
        $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "";
        if($nombreUsuario != ""){
            $this->homeAdminModel->darAlta($nombreUsuario);
            echo $this->render->render("view/homeAdminView.php");
        }
        
        else{
            echo $this->render->render("view/registerView.php");
        }
    }
    
    

}
?>