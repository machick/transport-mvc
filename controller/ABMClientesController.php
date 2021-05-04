<?php
class ABMClientesController
{
    private $ABMClientesModel;
    private $render;

    public function __construct($ABMClientesModel, $render){
        $this->ABMClientesModel = $ABMClientesModel;
        $this->render = $render;
    }

    public function execute(){
        $data["clientes"] = $this->ABMClientesModel->getClientes();
        if ($_SESSION["rolLogeado"] == "supervisor") {
            echo $this->render->render("view/ABMClientesView.php", $data);
        }
        if ($_SESSION["rolLogeado"] == "admin"){
            echo $this->render->render("view/ABMClientesAdminView.php", $data);
        }
        else {
            echo "Usuario no es supervisor";
        }

    }

    public function InsertaCliente(){
        //datos clientes
        $data["nombre"]=$clienteNombre = $_POST["nombreClienteProforma"];
        $data["apellido"]=$clienteApellido = $_POST["apellidoClienteProforma"];
        $data["denominacion"]=$clienteDenominacion = $_POST["denominacionProforma"];
        $data["cuit"]=$clienteCuit = $_POST["CuitProforma"];
        $data["telefono"]=$clienteTelefono = $_POST["TelefonoProforma"];
        $data["email"]=$clienteEmail = $_POST["EmailProforma"];
        $data["contacto1"]=$clienteContacto1 = $_POST["contacto1Proforma"];
        $data["contacto2"]=$clienteContacto2 = $_POST["contacto2Proforma"];
        //direccion cliente
        $data["calleC"]=$calleClienteProforma = $_POST["calleProforma"];
        $data["numeroC"]=$numeroClienteProforma = $_POST["numeroProforma"];
        $data["localidadC"]=$localidadClienteProforma = $_POST["localidadProforma"];
        $data["provinciaC"]=$provinciaClienteProforma = $_POST["provinciaProforma"];
        $data["paisC"]=$paisClienteProforma = $_POST["paisProforma"];

        $idDireccion = $this->ABMClientesModel->insertaDireccionCliente($calleClienteProforma,$numeroClienteProforma,$localidadClienteProforma,$provinciaClienteProforma,$paisClienteProforma);
        $idCliente = $this->ABMClientesModel->insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccion);
        $this->execute();
    }

    public function deleteCliente(){
        $idCliente = $_POST['idCliente'];
        $this->ABMClientesModel->deleteCliente($idCliente);
        $this->execute();
    }

    public function updateCliente(){
        //datos clientes
        $idCliente = $_POST["idCliente"];
        $clienteNombre = $_POST["nombreClienteProforma"];
        $clienteApellido = $_POST["apellidoClienteProforma"];
        $clienteDenominacion = $_POST["denominacionProforma"];
        $clienteCuit = $_POST["CuitProforma"];
        $clienteTelefono = $_POST["TelefonoProforma"];
        $clienteEmail = $_POST["EmailProforma"];
        $clienteContacto1 = $_POST["contacto1Proforma"];
        $clienteContacto2 = $_POST["contacto2Proforma"];
        $this->ABMClientesModel->updateCliente($idCliente,$clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2);
        $this->execute();
    }
}
?>