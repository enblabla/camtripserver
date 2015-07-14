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
        //funcion para eliminar fotos
        //by Vinicius Gouveia de Miranda en 14/07/15
        
        //crear sentencia sql y ejecutar
        $sql = "delete from fotos where id = $id_foto";
        $this->dbManager->executeQuery($sql);
        
        //contestamos al cliente
        
        echo "ok";
        
    }

    public function insertarFoto($id_viaje, $foto) {
        
    }

    public function listarFotos($id_viaje) {

        $sql = "SELECT FROM fotos WHERE id_viaje = '$id_viaje'";
        $data = $this->dbManager->executeSelectQuery($sql);

        $xml = new SimpleXMLElement('<fotos/>');

        for($i=0;$i<count($data);$i++) {
            $fotos= $xml->addChild('foto');
            $fotos->addChild('id',$data[$i]['id']);
            $fotos->addChild('url',$data[$i]['url']);
        }

        Header('Content-type: text:XML');
        print($xml->asXML());

    }

}
