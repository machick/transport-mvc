<?php
class CargaProformaChoferController
{
    private $CargaProformaChoferModel;
    private $render;

    public function __construct($CargaProformaChoferModel, $render){
        $this->CargaProformaChoferModel = $CargaProformaChoferModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION["rolLogeado"] == "chofer") {
            echo $this->render->render("view/CargaProformaChoferView.php");
        } else {
            echo "Usuario no es chofer";
        }

    }

    public function cargaProforma(){
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
        //direccion origen
        $data["calleO"]=$calleViajeOrigen = $_POST["calleViajeOrigen"];
        $data["numeroO"]=$numeroViajeOrigen = $_POST["numeroViajeOrigen"];
        $data["localidadO"]=$localidadViajeOrigen = $_POST["localidadViajeOrigen"];
        $data["provinciaO"]=$provinciaViajeOrigen = $_POST["provinciaViajeOrigen"];
        $data["paisO"]=$paisViajeOrigen = $_POST["paisViajeOrigen"];
        //direccion destino
        $data["calleD"]=$calleViajeDestino = $_POST["calleViajeDestino"];
        $data["numeroD"]=$numeroViajeDestino = $_POST["numeroViajeDestino"];
        $data["localidadD"]=$localidadViajeDestino = $_POST["localidadViajeDestino"];
        $data["provinciaD"]=$provinciaViajeDestino = $_POST["provinciaViajeDestino"];
        $data["paisD"]=$paisViajeDestino = $_POST["paisViajeDestino"];
        //tipo de carga
        $data["tipoCarga"]=$tipoCarga =$_POST["tipoCarga"];
        $data["pesoCarga"]=$pesoCarga=$_POST["pesoCarga"];
        $data["hazard"]=$hazard=$_POST["hazard"];
        $data["claseHazar"]=$claseHazard=$_POST["claseHazard"];
        $data["reefer"]=$reefer=$_POST["reefer"];
        $data["temperaturaReefer"]=$temperaturaReefer=$_POST["temperaturaReefer"];
        //costeo
        $data["kmE"]=$kilometrosEstimado=$_POST["kilometrosEstimado"];
        $data["combustibleE"]=$combustiblesEstimado=$_POST["combustiblesEstimado"];
        $data["etd"]=$etd=$_POST["etd"];
        $data["eta"]=$eta=$_POST["eta"];
        $data["viaticoE"]=$viaticoEstimado= $_POST["viaticoEstimado"];
        $data["peajeypasajeE"]=$peypaEstimado=$_POST["peypaEstimado"];
        $data["extrasE"]=$extrasEstimado=$_POST["extrasEstimado"];
        $data["costoHazarE"]=$hazardEstimado=$_POST["hazardEstimado"];
        $data["costoReeferE"]=$reeferEstimado=$_POST["reeferEstimado"];

        $idDireccionC = $this->CargaProformaModel->insertaDireccion($calleClienteProforma,$numeroClienteProforma,$localidadClienteProforma,$provinciaClienteProforma,$paisClienteProforma);
        $idCliente = $this->CargaProformaModel->insertaCliente($clienteNombre,$clienteApellido,$clienteDenominacion,$clienteCuit,$clienteTelefono,$clienteEmail,$clienteContacto1,$clienteContacto2,$idDireccionC);
        $idDireccionOrigen = $this->CargaProformaModel->insertaDireccion($calleViajeOrigen,$numeroViajeOrigen,$localidadViajeOrigen,$provinciaViajeOrigen,$paisViajeOrigen);
        $idDireccionDestino = $this->CargaProformaModel->insertaDireccion($calleViajeDestino,$numeroViajeDestino,$localidadViajeDestino,$provinciaViajeDestino,$paisViajeDestino);
        $idCarga = $this->CargaProformaModel->insertaCarga($tipoCarga,$pesoCarga,$hazard,$claseHazard,$reefer,$temperaturaReefer);
        $idDatosEstimados = $this->CargaProformaModel->insertaDatosEstimados($kilometrosEstimado,$combustiblesEstimado,$etd,$eta,$viaticoEstimado,$peypaEstimado,$extrasEstimado,$hazardEstimado,$reeferEstimado);
        $this->CargaProformaModel->insertaProformaViaje($idCliente,$idDatosEstimados,$idDireccionOrigen,$idDireccionDestino,$idCarga);
        echo $this->render->render("view/ProformaView.php",$data);


    }
    public function imprimirProforma(){
        /* cargamos variables de tal manera de no incluir texto en la creacion del pdf para evitar quilombos ....(nota posterior) al parecer no causaba tanto quilombo pero bueno*/
       /* cosas para el pdf */
        $arial="Arial"; $b="b"; $requirePdf="fpdf.php"; $direccionQr="../phpqrcode/qrlib.php";  $c="c";$direccionImagen="../img/logoColor.png";
        /*  *****  */
        $idViajeCreado = $_POST["idViajeCreado"];
        $titulo="PROFORMA N° ".$idViajeCreado;
        $nombre="Cliente:    ".$_POST["nombre"]." ".$_POST["apellido"];
        $denominacion="Denominacion:    ".$_POST["denominacion"];
        $cuit="Cuit:    ".$_POST["cuit"];
        $teleEmail="Telefono:   ".$_POST["telefono"]."   Email:     ".$_POST["email"];
        $contactos="Contacto1:  ".$_POST["contacto1"]."   Contacto2:    ".$_POST["contacto2"];
        $lugar="Pais:   ".$_POST["paisC"]."    Provincia:   ".$_POST["provinciaC"];
        $direccionCliente="Direccion:   ".$_POST["calleC"]." ".$_POST["numeroC"]."  Localidad: ".$_POST["localidadC"];
        /* Origen */
        $lugarOrigen="Pais de origen: ".$_POST["paisO"]."  Provincia: ".$_POST["provinciaO"];
        $direccionOrigen="Direccion Origen: ".$_POST["calleO"]." ".$_POST["numeroO"]." Localidad: ".$_POST["localidadO"];
        /* Destino */
        $lugarDestino="Pais de Destino: ".$_POST["paisD"]."  Provincia: ".$_POST["provinciaD"];
        $direccionDestino="Direccion Destino: ".$_POST["calleD"]." ".$_POST["numeroD"]." Localidad: ".$_POST["localidadD"];
        /* Carga */
        $carga= "Tipo: ".$_POST["tipoCarga"]." Peso: ".$_POST["pesoCarga"]." kilos";
        $hazard= "Hazar: ".$_POST["hazard"]."   Clase: ".$_POST["claseHazar"];
        $reefer= "Reefer: ".$_POST["reefer"]."  Temperatura: ".$_POST["temperaturaReefer"];
        /* Costo estimado */

        $recorrido="Kilometros estimados: ".$_POST["kmE"]."      Combustible estimado: ".$_POST["combustibleE"];
        $et="ETD: ".$_POST["etd"]." ETA: ".$_POST["eta"];
        $gastos="Viatico estimado: ".$_POST["viaticoE"]."        Peaje y pasaje estimado: ".$_POST["peajeypasajeE"];
        $extras="Gastos extras estimados: ".$_POST["extrasE"];
        $costo="Costo hazar estimado: ".$_POST["costoHazarE"]."      Costo reefer estimado: ".$_POST["costoReeferE"];

        /* QR */
        $requireQr="../phpqrcode/qrlib.php";      


        $contenido="localhost/ActualizarProforma/choferConProforma?idViaje=$idViajeCreado";
        $level="m";
        ob_start();
require("public/pdf/fpdf.php");
require("public/phpqrcode/qrlib.php");
    $test="qrtest.png";
    $dir ="temp/";
     if (!file_exists($dir))
       mkdir($dir);

    $filename = $dir.$test;

    
    $tamanio = 10;
    $frameSize=3;
    QRcode::png($contenido ,$filename,$level,$tamanio,$frameSize);
    $pdf = new FPDF();
    $pdf->AddPage();        
    $pdf->Image("public/img/logoColor.png",175,5,30);
    $pdf->SetFont("arial", "b", 16);
    $pdf->Cell(80);

    $pdf->Cell(100, 10,utf8_decode($titulo),0,1,"b",0);
    
    $pdf->Cell(100, 10,utf8_decode("Datos Cliente"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($nombre),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($denominacion),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($cuit),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($teleEmail),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($contactos),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($lugar),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($direccionCliente),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Origen"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($lugarOrigen),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($direccionOrigen),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Destino"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($lugarDestino),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($direccionDestino),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode( "Datos Carga"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($carga),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($hazard),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($reefer),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode("Datos Costos"),1,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($recorrido),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($et),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($gastos),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($extras),0,1,"b",0);
    $pdf->Cell(100, 10,utf8_decode($costo),0,1,"b",0);
     $pdf->Image($filename,175,60,30);
    $pdf->Output();
        ob_end_flush();
   
}



}
?>


        <!-- $estadoElegido = $_POST["estado"];
        $nombreUsuario= $_POST["nick"];
        $this->ABMUsuariosModel->modificarEstadoDeUsuario($nombreUsuario,$estadoElegido);
        header("Location:/ABMUsuarios");
        exit(); -->