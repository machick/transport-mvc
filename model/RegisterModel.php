<?php 
class RegisterModel{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function addUser($nombre,$apellido,$documento,$telefono,$email,$username,$password/* aca faltaria direccion y rol*/){

    
       if($nombre != "" && $apellido != "" && $documento != "" && $username != "" && $email != "" && $password != "" && $telefono != ""){
           /*Arreglar esto para que no se repita el nombre de usuario*/
           $passwordEncripted = md5($password);
        $user = $this->database->buscaUserName("SELECT COUNT(*) FROM `usuario` WHERE nombreUsuario ='$username'");
        if($user[0]["COUNT(*)"] == 0){
              $this->database->queryInsert("INSERT INTO `usuario` (`nombre`, `apellido`, `documento`, `telefono`, `email`, `nombreUsuario`, `password`, `fk_Usuario_role`, `fk_Usuario_Direccion`)
             VALUES ('$nombre', '$apellido', '$documento', '$telefono', '$email', '$username', '$passwordEncripted',(SELECT idRole FROM `role` WHERE nombre = 'sin rol'),(SELECT idDireccion FROM `Direccion` where calle like ('SIN DIRECCION')))");
        }else{
           echo "El user name ya esta usado"; 
        }
}
}
}

