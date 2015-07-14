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

    //*** Function Author - HUGO ***
    public function insertarFoto($id_viaje, $foto) {
        $sql = "INSERT INTO fotos (id_viaje,url) VALUES ('$id_viaje','$foto')";
        $this->dbManager->executeQuery($sql);
        //retornamos ok
        echo "ok";
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
