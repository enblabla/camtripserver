<?php


require_once './DBManager.php';
include './ViajesInterface.php';

class ViajeManager implements ViajesInterface {
    private $dbManager;
    
    
    function __construct() {
        include './inc/conexion.php';
        $this->dbManager = new DBManager($host, $user, $password, $database);
    }

    public function crearViaje($id_usuario, $titulo, $fecha) {
        
        //sentencia sql
        $sql = "INSERT INTO viajes (titulo,fecha,id_usuario) VALUES "
                . "('$titulo','$fecha',$id_usuario)";
        
        //ejecutamos sentencia
        $this->dbManager->executeQuery($sql);
        
        //return ok
        echo  "ok";
        
        
    }

    public function editarViaje($id_viaje, $titulo, $fecha) {
        
    }

    public function eliminarViaje($id_viaje) {
        
    }

    public function listarViajes($id_usuario) {
        
    }

}
