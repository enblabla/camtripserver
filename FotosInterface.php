<?php

interface FotosInterface {
    /*
     * ListarFotos:
     * -params de entrada --> id_viaje
     * -params de salida --> XML con las url's de las fotos
     */
    function listarFotos($id_viaje);
    /*
     * InsertarFoto:
     * -params de entrada --> id_viaje,$foto
     * -params de salida --> 
     */
    function insertarFoto($id_viaje,$foto);
    /*
     * EliminarFoto:
     * -params de entrada --> $id_foto
     * -params de salida --> 
     */
    function eliminarFoto($id_foto);
}
