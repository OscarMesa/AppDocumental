<?php

/**
 *  Se encarga de gestionar el envio de correos electronicos
 * @author Victor Hugo Arango
 * @version 1.0
 * @created 07-may-2011 06:42:29 p.m.
 * @package Components
 */
Yii::import('application.components..phpmailer.*');
class Email extends CExtController
{
<<<<<<< HEAD
	/**
	 * Logo de la empresa y codigo HTML que va al comienzo del email
	 */
	private $encabezado;
	/**
	 * Es el pie que va en la parte de abajo, con los datos de contacto generalmente
	 */
	private $pie;
	/**
	 * Nombre del remitente a nombre de quien le llega a los usuarios
	 */
        private $cuerpoEmail;
		private $remitente;

        private $mail;

	function Email() 
	{
=======
  /**
   * Logo de la empresa y codigo HTML que va al comienzo del email
   */
  private $encabezado;
  /**
   * Es el pie que va en la parte de abajo, con los datos de contacto generalmente
   */
  private $pie;
  /**
   * Nombre del remitente a nombre de quien le llega a los usuarios
   */
        private $cuerpoEmail;
    private $remitente;

        private $mail;

  function Email() 
  {
>>>>>>> produccionV2

           //$this->encabezado=CHtml::image(Yii::app()->params->domain.'images/foto_discoteca.jpg').'<br/><br/>';
           $this->pie= '<br/><br/> Este email ha sido enviado automaticamente desde <a style="color:black" href="http://www.tudiscotek.com">www.tudiscotek.com</a> ';

            $this->remitente = Yii::app()->name ." <info@tudiscotek.com>";


            $mail             = new PHPMailer(); // defaults to using php "mail()"

            //$body             = "hola";
            $mail->IsSMTP(); // telling the class to use SMTP
<<<<<<< HEAD
            $mail->Host       = "mail.tudiscotek.com"; // SMTP server
=======
            $mail->Host       = "aerovision.com.co"; // SMTP server
>>>>>>> produccionV2
            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                                       // 1 = errors and messages
                                                       // 2 = messages only
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            //$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
<<<<<<< HEAD
            $mail->Host       = "mail.tudiscoteka.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 26;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "info@tudiscotek.com";  // GMAIL username
            $mail->Password   = "vihuarar";            // GMAIL password
=======
            $mail->Host       = "ssl://smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "oscar@nettic.com.co";  // GMAIL username
            $mail->Password   = "nettic.com";            // GMAIL password
>>>>>>> produccionV2
            //$mail->AddReplyTo("name@yourdomain.com","First Last");

            $mail->SetFrom('info@tudiscotek.com', Yii::app()->name );

            $mail->AddReplyTo("info@tudiscotek.com",Yii::app()->name );



            $mail->AltBody    = "Para ver este mensaje, por favor utilice un cliente de correo compatible con HTML"; // optional, comment out and test

            $this->cuerpoEmail .=$this->encabezado;

            $this->mail = $mail;
  }


/**
 *
 * @param type $nombreDestinatario
 * @param type $emailDestinatario
 * @param type $cuerpoMensaje
 * @param type $nombreNotificacion
 * @param type $plantillaEstandar indica si el atributo $cuerpoMensaje ya trae formatos... De lo contrario se utiliza uno formato estandar
 * Para defirnir los estilos de la plantilla
 */
<<<<<<< HEAD
	function enviarNotificacion($nombreDestinatario=null, $emailDestinatario,  $cuerpoMensaje, $nombreNotificacion, $plantillaEstandar=false)
	{


			$logo="";
=======
  function enviarNotificacion($nombreDestinatario=null, $emailDestinatario,  $cuerpoMensaje, $nombreNotificacion, $plantillaEstandar=false)
  {


      $logo="";
>>>>>>> produccionV2
      if($plantillaEstandar==true){
        $this->cuerpoEmail = $this->renderPartial('emailPlantillaEstandar',array('pie_de_pagina'=>$this->pie,'mensaje'=>$cuerpoMensaje,'destinatario'=>$nombreDestinatario),true);
      }else{
        $this->cuerpoEmail = $cuerpoMensaje;
      }
<<<<<<< HEAD
     //       	$this->cuerpoEmail='<head>
					// 	<title>tudiscotek</title>

					// </head>
					// <body style="">
					// 	</style>';
           	// $this->cuerpoEmail .= $logo.'<br/>'.$cuerpoMensaje;

           	// $this->cuerpoEmail .= $this->pie;
           	// $this->cuerpoEmail .= "</body>";
            $this->mail->Subject    = $nombreNotificacion;
            $this->mail->AddAddress($emailDestinatario, $nombreDestinatario);
            $this->enviarEmail($emailDestinatario, $nombreNotificacion);
	}

      function enviarEmail($emailDestinatario, $nombreNotificacion){

			//var_dump($this->cuerpoEmail);
			$this->Email();
			$this->mail->Subject=$nombreNotificacion;
            $this->mail->MsgHTML($this->cuerpoEmail);
            $this->mail->AddAddress($emailDestinatario);
			//var_dump($this->mail->SMTPDebug);
=======
     //         $this->cuerpoEmail='<head>
          //  <title>tudiscotek</title>

          // </head>
          // <body style="">
          //  </style>';
            // $this->cuerpoEmail .= $logo.'<br/>'.$cuerpoMensaje;

            // $this->cuerpoEmail .= $this->pie;
            // $this->cuerpoEmail .= "</body>";
            $this->mail->Subject    = $nombreNotificacion;
            $this->mail->AddAddress($emailDestinatario, $nombreDestinatario);
            $this->enviarEmail($emailDestinatario, $nombreNotificacion);
  }

      function enviarEmail($emailDestinatario, $nombreNotificacion){

      //var_dump($this->cuerpoEmail);
      $this->Email();
      $this->mail->Subject=$nombreNotificacion;
            $this->mail->MsgHTML($this->cuerpoEmail);
            $this->mail->AddAddress($emailDestinatario);
      //var_dump($this->mail->SMTPDebug);
>>>>>>> produccionV2
            if(!$this->mail->Send()) {
              //echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
              //echo "Message sent!";
            }
        }

}
?>