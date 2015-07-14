<?php
/**
 * Description of DBManager
 *
 */
class DBManager {
    //ATRIBUTOS GLOBALES
    private $host,$user,$password,$database,$link;
    //CONSTRUCTOR DE LA CLASE
    function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }
    //FUNCIONES CONEXIÓN:
    private function connectDB(){
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_query($this->link, "SET NAMES 'utf8'");
    }
    private function disconnectDB(){
        mysqli_close($this->link);
    }
    //FUNCIONES DE SENTENCIA:
    public function executeQuery($sql){
        $this->connectDB();
        $result = mysqli_query($this->link, $sql);
        $this->disconnectDB();
        return $result;
    }
    
    public function executeSelectQuery($sql){
        $this->connectDB();
        $result = mysqli_query($this->link, $sql);
        $data = array();
        while($fila = mysqli_fetch_assoc($result)) {
            $data[] = $fila;
        }
        $this->disconnectDB();
        return $data;
    }
    
    
}
