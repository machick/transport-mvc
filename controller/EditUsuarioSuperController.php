<?php
class EditUsuarioSuperController
{
    private $EditUsuarioSuperModel;
    private $render;

    public function __construct($EditUsuarioSuperModel, $render){
        $this->EditUsuarioSuperModel = $EditUsuarioSuperModel;
        $this->render = $render;
    }

    public function execute()    {
        $data["usuario"] = $this->EditUsuarioSuperModel->traerUsuario($_SESSION['idUsuario']);
        $data["licencias"] = $this->EditUsuarioSuperModel->traerLicencias($_SESSION['idUsuario']);
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/EditUsuarioSuperView.php", $data);
            }else {
                echo "Usuario no es supervisor";
            }
    }

    public function insertaLicencia(){
        $idUsuario = $_POST["idUsuario"];
        $tipoLicencia = $_POST['tipoLicencia'];
        $descripcionLicencia = $_POST['descripcionLicencia'];
        $this->EditUsuarioSuperModel->insertaLicencia($idUsuario,$tipoLicencia,$descripcionLicencia);
        $this->execute();
    }

    public function updateUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $nombreUsuario = $_POST["nombreUsuario"];
        $apellidoUsuario = $_POST["apellidoUsuario"];
        $documentoUsuario = $_POST["documentoUsuario"];
        $TelefonoUsuario = $_POST["TelefonoUsuario"];
        $EmailUsuario = $_POST["EmailUsuario"];
        $this->EditUsuarioSuperModel->updateCliente($idUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$TelefonoUsuario,$EmailUsuario);
        $this->execute();
    }

    public function deleteLicencia(){
        $idLicencia = $_POST['idLicencia'];
        $this->EditUsuarioSuperModel->deleteLicencia($idLicencia);
        $this->execute();
    }
}