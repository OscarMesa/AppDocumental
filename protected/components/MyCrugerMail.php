<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyCrugerMail
 *
 * @author oskar
 * 
 */
class MyCrugerMail extends CrugeMailer {

    public function sendEmail($to, $subject, $body) {
        Yii::import('ext.yii-mail.YiiMailMessage');
        $message = new YiiMailMessage();
        $message->setBody($body, 'text/html');
        //$params = array('usuario' => $usuario, 'documento' => $documento);
        $message->subject = $subject;
        $message->addTo($to);
        $message->from = 'correo@midominio.com';
        Yii::app()->mail->send($message);
    }

}
