<?php
class EditUsuarioChoferController
{
    private $EditUsuarioChoferModel;
    private $render;

    public function __construct($EditUsuarioChoferModel, $render){
        $this->EditUsuarioChoferModel = $EditUsuarioChoferModel;
        $this->render = $render;
    }

    public function execute()    {
        $data["usuario"] = $this->EditUsuarioChoferModel->traerUsuario($_SESSION['idUsuario']);
        $data["licencias"] = $this->EditUsuarioChoferModel->traerLicencias($_SESSION['idUsuario']);
        if ($_SESSION["rolLogeado"] == "chofer") {
        echo $this->render->render("view/EditUsuarioChoferView.php", $data);
        }else {
            echo "Usuario no es chofer";
        }
    }

    public function insertaLicencia(){
        $idUsuario = $_POST["idUsuario"];
        $tipoLicencia = $_POST['tipoLicencia'];
        $descripcionLicencia = $_POST['descripcionLicencia'];
        $this->EditUsuarioChoferModel->insertaLicencia($idUsuario,$tipoLicencia,$descripcionLicencia);
        $this->execute();
    }

    public function updateUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $nombreUsuario = $_POST["nombreUsuario"];
        $apellidoUsuario = $_POST["apellidoUsuario"];
        $documentoUsuario = $_POST["documentoUsuario"];
        $TelefonoUsuario = $_POST["TelefonoUsuario"];
        $EmailUsuario = $_POST["EmailUsuario"];
        $this->EditUsuarioChoferModel->updateCliente($idUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$TelefonoUsuario,$EmailUsuario);
        $this->execute();
    }

    public function deleteLicencia(){
        $idLicencia = $_POST['idLicencia'];
        $this->EditUsuarioChoferModel->deleteLicencia($idLicencia);
        $this->execute();
    }
}