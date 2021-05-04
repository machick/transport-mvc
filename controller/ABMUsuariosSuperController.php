<?php
class ABMUsuariosSuperController
{
    private $ABMUsuariosSuperModel;
    private $render;

    public function __construct($ABMUsuariosSuperModel, $render){
        $this->ABMUsuariosSuperModel = $ABMUsuariosSuperModel;
        $this->render = $render;
    }

    public function execute(){
        $data["usuarios"] = $this->ABMUsuariosSuperModel->traerUsuarios();
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ABMUsuariosSuperView.php", $data);
        } else {
            echo "Usuario no es super";
        }
    }
}
?>