<?php


require_once './DBManager.php';
include './LoginInterface.php';

class LoginManager implements LoginInterface{
    private $dbManager;
    
    
    function __construct() {
        include './inc/conexion.php';
        $this->dbManager = new DBManager($host, $user, $password, $database);
    }

        
    
    public function login($correo, $password) {
        $password = sha1($password);
        $sql = "SELECT * FROM usuarios WHERE "
                . "correo='$correo' AND "
                . "password = '$password'";
        $datos = $this->dbManager->executeSelectQuery($sql);
        
        if(count($datos) == 0){
            echo -1;
        }else{
            echo $datos[0]['id'];
        }
        
    }

    public function registro($correo, $password) {
        

        
        $sql = "SELECT * FROM usuarios WHERE "
                . "correo = '$correo'";
        $datos = $this->dbManager->executeSelectQuery($sql);
        if(count($datos) == 0){
            $passwordSha1 = sha1($password);
            $sql = "INSERT INTO usuarios (correo,password) VALUES "
                    . "('$correo','$passwordSha1')";
            $this->dbManager->executeQuery($sql);
            $this->login($correo, $password);
        }else{
            echo -1;
        }
    }

}
