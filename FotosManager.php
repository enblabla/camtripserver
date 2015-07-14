<?php


require_once './DBManager.php';
include './FotosInterface.php';


class FotosManager implements FotosInterface{
   private $dbManager;
    
    
    function __construct() {
        include './inc/conexion.php';
        $this->dbManager = new DBManager($host, $user, $password, $database);
    }

    public function eliminarFoto($id_foto) {
        
    }

    public function insertarFoto($id_viaje, $foto) {
        
    }

    public function listarFotos($id_viaje) {
        
    }

}
