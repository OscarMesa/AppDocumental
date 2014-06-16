<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilidades
 *
 * @author oskar
 */
class Utilidades {
    
    public static $mail = "oscar@nettic.com.co";
    
    public static function getSubString($string, $length = NULL) {
        //Si no se especifica la longitud por defecto es 50
        if ($length == NULL)
            $length = 50;
        //Primero eliminamos las etiquetas html y luego cortamos el string
        $stringDisplay = substr(strip_tags($string), 0, $length);
        //Si el texto es mayor que la longitud se agrega puntos suspensivos
        if (strlen(strip_tags($string)) > $length)
            $stringDisplay .= ' ...';
        return $stringDisplay;
    }

    public static function getValores() {
        $indicadores = '<!-- Indicadores Económicos -->
            <div id="bgBody">
             
            </div> 
            <!-- Indicadores Económicos -->';
        return $indicadores;
    }
    
    public static function guidv4() {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

}
