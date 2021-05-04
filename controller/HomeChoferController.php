<?php
class HomeChoferController
{
    private $homeChoferModel;
    private $render;

    public function __construct($homeChoferModel, $render){
        $this->homeChoferModel = $homeChoferModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "chofer") {
            echo $this->render->render("view/homeChoferView.php");
        } else {
            echo "Usuario no es chofer";
        }

    }
}
?>