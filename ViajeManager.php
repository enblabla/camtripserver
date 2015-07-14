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
         
         $sql = "SELECT * FROM viajes WHERE "
                . "id_usuario = '$id_usuario'";
        $data = $this->dbManager->executeSelectQuery($sql);

        //creamos el xml


        $xml = new SimpleXMLElement('<viajes/>');



        for ($i = 0; $i < count($data); $i++) {
            //etiqueta 
            $mensaje = $xml->addChild("viajes");

            $mensaje->addChild("fecha", $data[$i]['fecha']);
            $mensaje->addChild("id", $data[$i]['id']);
            $mensaje->addChild("id_usuario", $data[$i]['id_usuario']);
             $mensaje->addChild("titulo", $data[$i]['titulo']);
        }

        header('Content-type: text/xml');
        print($xml->asXML());
    }
    

}
