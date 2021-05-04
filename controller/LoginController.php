<?php
class LoginController
{
    private $loginModel;
    private $render;

    public function __construct($loginModel, $render){
        $this->loginModel = $loginModel;
        $this->render = $render;
    }

    public function execute(){
        
        $data["usuarios"] = $this->loginModel->getUsuarios();
        echo $this->render->render("view/loginView.php", $data);
    }

    public function insertUsuario(){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        if($nombre == "" || $password == "")
            return $this->renderErrorMenssage('El email y password son obligatorios');
        else{
            $usuario =$this->loginModel->traerUsuarioLogeado($nombre, $password);
            $estado = isset($usuario[0]["estado"])?$usuario[0]["estado"]: "";
            if($estado == 1) {
                $_SESSION['idUsuario'] = $usuario[0]['idUsuario'];
                if ($usuario) {
                    $rol = $this->loginModel->traerRolPorNumeroFk($usuario[0]['fk_Usuario_Role']);
                    // aca estaria la separacion por rol una vez logeado pregunta el rol y lo dirige al .php de ese rol
                    if (isset($rol[0]["nombre"])) {
                        //agrego el rol del usuario ingresado a la sesion
                        $_SESSION["rolLogeado"] = $rol[0]["nombre"];
                        //lo dirige a la pagina del rol logeado
                        switch ($rol[0]["nombre"]) {
                            case "admin":
                                $data["nombreRol"] = "el usuario ingresado es admin";
                                //cambiar home por admin.php
                                echo $this->render->render("view/homeAdminView.php", $data);
                                break;
                            case "supervisor":
                                $data["nombreRol"] = "el usuario ingresado es supervisor";
                                //cambiar home por supervisor.php
                                echo $this->render->render("view/homeSuperView.php", $data);
                                break;
                            case "encargadoTaller":
                                $data["nombreRol"] = "el usuario ingresado es encargado de taller";
                                echo $this->render->render("view/homeTallerView.php", $data);
                                break;
                            case "chofer":
                                $data["nombreRol"] = "el usuario ingresado es chofer";
                                echo $this->render->render("view/homeChoferView.php", $data);
                                break;
                            default:
                                $data["nombreRol"] = "el usuario ingresado es sin rol";
                                echo $this->render->render("view/homeSinRolView.php", $data);
                                break;
                        }
                    } else {
                        $data["nombreRol"] = "el usuario ingresado es sin rol";
                        echo $this->render->render("view/homeSinRolView.php", $data);
                    }
                } else {
                    $data["mensajeError"] = "Usuario y/o contaseña invalida";
                    echo $this->render->render("view/loginView.php", $data);
                }
            }else{
                $data["mensajeError"] = "EL USUARIO NO ESTA HABILITADO";
                echo $this->render->render("view/loginView.php", $data);
            }

        }

    }

    public function renderErrorMenssage($message){
        $params = array('errorMessage' => $message);
        echo $this->render->render("view/loginView.php", $params);
    }

    public function logout(){
        session_destroy();
        echo $this->render->render("view/loginView.php");
    }

}
?>