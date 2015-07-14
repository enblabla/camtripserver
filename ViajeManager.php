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
        //Manuel Marruffo
        $sql = "SELECT * FROM viajes WHERE id = '$id_viaje'"; 
        
        $datos = $this->dbManager->executeSelectQuery($sql);
        
        if(count($datos) == 0){

            $sql = "DELETE FROM viajes WHERE id = '$id_viaje' ";
            $this->dbManager->executeQuery($sql);

        }else{
            echo -1;   
        }
        
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
