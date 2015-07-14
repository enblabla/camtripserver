<?php


interface ViajesInterface {
    /*
     * ListarViajes:
     * -params de entrada --> id_usuario
     * -params de salida --> XML con los viajes
     */
    function listarViajes($id_usuario);
    
    /*
     * CrearViaje:
     * -params de entrada --> id_usuario,$titulo,$fecha
     * -params de salida --> 
     */
    function crearViaje($id_usuario,$titulo,$fecha);
    
    /*
     * EliminarViaje:
     * -params de entrada --> id_viaje
     * -params de salida --> 
     */
    function eliminarViaje($id_viaje);
    
    /*
     * EditarViaje:
     * -params de entrada --> id_viaje,$titulo,$fecha
     * -params de salida --> 
     */
    function editarViaje($id_viaje,$titulo,$fecha);
}
