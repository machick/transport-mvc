 <?php 
class LoginModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM `role`");
    }

    public function traerUsuarioLogeado($nombre, $password){
        $passwordEncripted = md5($password);
        $queryResult = $this->database->query("SELECT * FROM `usuario` 
        WHERE nombreUsuario = '". $nombre ."' and password='".$passwordEncripted."'");
        if (sizeof($queryResult) == 1){
            return $queryResult;
        }else{
            return false;
        }
    }
    public function traerRolPorNumeroFk($numero){
        return $this->database->query("SELECT * FROM grupo02.role where idRole='$numero'");
    }
}