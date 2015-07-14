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
        
    }

    public function editarViaje($id_viaje, $titulo, $fecha) {
        
    }

    public function eliminarViaje($id_viaje) {
        
    }

    public function listarViajes($id_usuario) {
        
    }

}
