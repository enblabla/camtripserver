<?php

//INCLUIR TODAS LAS CLASES DE LA APLICACIÓN
include './LoginManager.php';
include './FotosManager.php';
include './ViajeManager.php';

//EXTRAER TODAS LAS VARIABLES Y PETICIONES DE IOS
extract($_REQUEST);


//SEGÚN LA PETICIÓN INSTANCIAMOS OBJTOS DE LA CLASE NECESARIA Y LLAMAMOS
//A LA FUNCIÓN CORRESPONDIENTE

switch ($p){
    case "login":
        $loginManager = new LoginManager();
        $loginManager->login($correo, $password);
        break;
    case "registro":
        $loginManager = new LoginManager();
        $loginManager->registro($correo, $password);
        break;
    case "listarViajes":
        $viajesManager = new ViajeManager();
        $viajesManager->listarViajes($id_usuario);
        break;
    case "eliminarViaje":
        $viajesManager = new ViajeManager();
        $viajesManager->eliminarViaje($id_viaje);
        break;
    case "editarViaje":
        $viajesManager = new ViajeManager();
        $viajesManager->editarViaje($id_viaje, $titulo, $fecha);
        break;
    case "crearViaje":
        $viajesManager = new ViajeManager();
        $viajesManager->crearViaje($id_usuario, $titulo, $fecha);
        break;
    case "insertarFoto":
        $fotoManager = new FotosManager();
        $fotoManager->insertarFoto($id_viaje, $foto);
        break;
    case "eliminarFoto":
        $fotoManager = new FotosManager();
        $fotoManager->eliminarFoto($id_foto);
        break;
    case "listarFotos":
        $fotoManager = new FotosManager();
        $fotoManager->listarFotos($id_viaje);
        break;
    
}



