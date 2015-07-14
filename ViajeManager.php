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
        
        //Sentencia sql para seleccionar viaje
        $sql = "SELECT id,titulo, fecha FROM viajes WHERE id = $id_viaje";
        $this->dbManager->executeQuery($sql);
        //Sentecia para actualizar el titulo y la fecha
        $query = "UPDATE viajes SET titulo = $titulo, fecha = $fecha";
        $this->dbManager->executeSelectQuery($query);
         
    }

    public function eliminarViaje($id_viaje) {
        
    }

    public function listarViajes($id_usuario) {
        
    }

}
