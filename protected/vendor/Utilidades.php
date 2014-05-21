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

}
