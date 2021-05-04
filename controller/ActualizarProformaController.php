<?php


class ActualizarProformaController
{
    private $loginModel;
    private $CargaProformaModel;
    private $render;
    private $ActualizarProformaModel;

    public function __construct($LoginModel,$CargaProformaModel,$ActualizarProformaModel, $render ){
        $this->loginModel=$LoginModel;
        $this->CargaProformaModel = $CargaProformaModel;
        $this->ActualizarProformaModel = $ActualizarProformaModel;
        $this->render = $render;
        
    }
    public function execute(){
        echo "Error falta al cargar proforma.";
    }
    public function choferConProforma(){
        $data["idViaje"]=$_GET["idViaje"];
        echo $this->render->render("view/loginConQr.php",$data);
    }
    public function actualizarViaje(){
        $idViaje=$_POST["idViaje"];
        $nombre=$_POST["nombre"];
        $password=$_POST["password"];

        $usuario =$this->loginModel->traerUsuarioLogeado($nombre, $password);
        if($usuario) {
            $rol = $this->loginModel->traerRolPorNumeroFk($usuario[0]['fk_Usuario_Role']);
            if( $rol[0]["nombre"] =="chofer"){
                $data["idViaje"]=$idViaje;
                echo $this->render->render("view/ActualizarProformaView.php",$data);
            }else{
                echo "Problemas con el rol del usuario logeado";
            }
        }else{
            echo "Problemas con el usuario";
        }


    }
    public function actualizarUbicacion(){
        //logica y esas weas
        //echo $_POST["idViaje"]."<br>".$_POST["latitud"]."<br>".$_POST["longitud"];
        $data["idViaje"]=$_POST["idViaje"];
        $this->ActualizarProformaModel->actualizarUbicacionDeViaje($_POST["idViaje"],$_POST["latitud"],$_POST["longitud"]);
        echo $this->render->render("view/ActualizarProformaView.php",$data);
    }
    public function insertar(){
        $kilometros = $_POST["actualizarKilometros"];
        $combustible = $_POST["actualizarCombustible"];
        $ETD = $_POST["actualizarEtd"];
        $ETA = $_POST["actualizarEta"];
        $viaticos = $_POST["actualizarViaticos"];
        $PeajePasaje = $_POST["actualizarPeajePasaje"];
        $extras = $_POST["actualizarExtras"];
        $Hazard = $_POST["actualizarHazard"];
        $Reefer = $_POST["actualizarReefer"];
        $idDatosReales = $this->ActualizarProformaModel->insertar($kilometros,$combustible,$ETD,$ETA,$viaticos,$PeajePasaje,$extras,$Hazard,$Reefer);
        $this->ActualizarProformaModel->actualizarViaje($idDatosReales, $_POST["idViaje"]);
        echo $this->render->render("view/finViajeView.php");
    }


}