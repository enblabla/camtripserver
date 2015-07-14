<?php

/*
 * Las funciones para el login y el registro de usuarios
 */

/**
 *
 * @author Enrique Blasco Blanquer
 * @version 0.01
 * 
 */
interface LoginInterface {
    /*
     * Función login
     * - params de entrada: correo,password
     * - params de salida: -1 en caso de error, o la id del usuario
     */
    function login($correo,$password);
    
    /*
     * Función registro
     * - params de entrada: correo,password
     * - params de salida: -1 en caso de que el correo ya exista, 
     * o la id del usuario recien creado.
     */
    function registro($correo,$password);
}
