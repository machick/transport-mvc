<?php
class EditUsuarioEncargadoController
{
    private $EditUsuarioEncargadoModel;
    private $render;

    public function __construct($EditUsuarioEncargadoModel, $render){
        $this->EditUsuarioEncargadoModel = $EditUsuarioEncargadoModel;
        $this->render = $render;
    }

    public function execute()    {
        $data["usuario"] = $this->EditUsuarioEncargadoModel->traerUsuario($_SESSION['idUsuario']);
        $data["licencias"] = $this->EditUsuarioEncargadoModel->traerLicencias($_SESSION['idUsuario']);
        if ($_SESSION["rolLogeado"] == "encargadoTaller") {
            echo $this->render->render("view/EditUsuarioEncargadoView.php", $data);
            }else {
                echo "Usuario no es encargado";
            }
    }

    public function insertaLicencia(){
        $idUsuario = $_POST["idUsuario"];
        $tipoLicencia = $_POST['tipoLicencia'];
        $descripcionLicencia = $_POST['descripcionLicencia'];
        $this->EditUsuarioEncargadoModel->insertaLicencia($idUsuario,$tipoLicencia,$descripcionLicencia);
        $this->execute();
    }

    public function updateUsuario(){
        $idUsuario = $_POST["idUsuario"];
        $nombreUsuario = $_POST["nombreUsuario"];
        $apellidoUsuario = $_POST["apellidoUsuario"];
        $documentoUsuario = $_POST["documentoUsuario"];
        $TelefonoUsuario = $_POST["TelefonoUsuario"];
        $EmailUsuario = $_POST["EmailUsuario"];
        $this->EditUsuarioEncargadoModel->updateCliente($idUsuario,$nombreUsuario,$apellidoUsuario,$documentoUsuario,$TelefonoUsuario,$EmailUsuario);
        $this->execute();
    }

    public function deleteLicencia(){
        $idLicencia = $_POST['idLicencia'];
        $this->EditUsuarioEncargadoModel->deleteLicencia($idLicencia);
        $this->execute();
    }
}