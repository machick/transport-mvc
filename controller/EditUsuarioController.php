<?php
class EditUsuarioController
{
    private $EditUsuarioModel;
    private $render;

    public function __construct($EditUsuarioModel, $render){
        $this->EditUsuarioModel = $EditUsuarioModel;
        $this->render = $render;
    }

    public function execute()    {
        $data["usuario"] = $this->EditUsuarioModel->traerUsuario($_SESSION['idUsuario']);
        $data["licencias"] = $this->EditUsuarioModel->traerLicencias($_SESSION['idUsuario']);
        if ($_SESSION["rolLogeado"] == "admin") {
        echo $this->render->render("view/EditUsuarioView.php", $data);
        }else {
            echo "Usuario no es admin";
        }
    }

    public function insertaLicencia(){
        $idUsuario = $_POST["idUsuario"];
        $tipoLicencia = $_POST['tipoLicencia'];
        $descripcionLicencia = $_POST['descripcionLicencia'];
        $this->EditUsuarioModel->insertaLicencia($idUsuario,$tipoLicencia,$descripcionLicencia);
        $this->execute();
    }

    public function updateUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $nombreUsuario = $_POST["nombreUsuario"];
        $apellidoUsuario = $_POST["apellidoUsuario"];
        $documentoUsuario = $_POST["documentoUsuario"];
        $TelefonoUsuario = $_POST["TelefonoUsuario"];
        $EmailUsuario = $_POST["EmailUsuario"];
        $this->EditUsuarioModel->updateCliente($idUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$TelefonoUsuario,$EmailUsuario);
        $this->execute();
    }

    public function deleteLicencia(){
        $idLicencia = $_POST['idLicencia'];
        $this->EditUsuarioModel->deleteLicencia($idLicencia);
        $this->execute();
    }
}