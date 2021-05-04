<?php
class RegisterController
{
    private $registerModel;
    private $render;

    public function __construct($registerModel, $render){
        $this->registerModel = $registerModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuario"] = $this->registerModel->getUsuarios();
        echo $this->render->render("view/registerView.php", $data);
    }
    public function addUser(){
        $nombre = isset($_POST['nombreRegister']) ? $_POST['nombreRegister'] : "";
        $apellido = isset($_POST['apellidoRegister']) ? $_POST['apellidoRegister'] : "";
        $documento = isset($_POST['documentoRegister']) ? $_POST['documentoRegister'] : "";
        $username = isset($_POST['usuarioRegister']) ? $_POST['usuarioRegister'] : "";
        $email = isset($_POST['emailRegister']) ? $_POST['emailRegister'] : "";
        $password = isset($_POST['passwordRegister']) ? $_POST['passwordRegister'] : "";
        $telefono = isset($_POST['telefonoRegister']) ? $_POST['telefonoRegister'] : "";
        $this->registerModel->addUser($nombre,$apellido,$documento,$telefono,$email,$username,$password);
        echo $this->render->render( "view/loginView.php");
    }

}
?>