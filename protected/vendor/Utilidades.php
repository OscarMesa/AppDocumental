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
             <a id="bgLink" href="http://www.applab.in/" target="_blank">Integrado por AppLab.in</a>
             <script type="text/javascript">
              // <![CDATA[
              var bgHost = "http://www.applab.in/";
              var bgType = "CO-19284-1";
              //var bgIndi = "9|1|2|10|6|4|7|3";
              var bgIndi = "9|1|2|10|6|4|7|3";
              (function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src=\'"+f+"\' type=\'text/javascript\'%3E%3C/script%3E")); })(document);
              // ]]>
             </script>
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
