<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Nuevo documento</title>

        <!-- Hotmail ignora cierto código valido, se agrega esto -->
        <style type="text/css">
            .ReadMsgBody
            {width: 100%; background-color: #FFFFFF;}
            .ExternalClass
            {width: 100%; background-color: #FFFFFF;}
            body
            {width: 100%; height: 100%; background-color: #FFFFFF; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
            html
            {width: 100%; height: 100%;}

            @media only screen and (max-device-width: 480px) {

                .mobile_text_1 { font-size: 9px; color: #fff; text-align: right; }
                .mobile_text_2 { font-size: 14px; color: #404040; text-align: left; font-weight:bold; }
                .mobile_text_3 { font-size: 12px; color: #404040; text-align: left; }
                .mobile_text_4 { font-size: 11px; color: #404040; text-align: left; }
                .mobile_text_5 { font-size: 11px; color: #fff; text-align: center; line-height: 20px; }
                .mobile_text_6 { font-size: 10px; color: #404040; text-align: left; line-height: 15px; }

            }


        </style>
    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

        <!-- Wrapper -->
        <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td width="100%" height="100%" valign="top">	

                    <!-- Main wrapper --><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <td>

                                <!-- Iphone Wrapper -->

                                <table width="660" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td width="30"></td>
                                        <td width="600" bgcolor="">
                                            <!-- Top -->
                                            <table width="600" border="0" cellspacing="0" cellpadding="0">
                            <!--  <tr>
                                <td width="600" height="10" bgcolor="#FFFFFF" align="center" valign="top" style="text-align:center; font-size: 9px; color: #040401; font-family: Helvetica, Arial, sans-serif; line-height: 20px; vertical-align: top;"><section class="mobile_text_1">No puedes ver correctamente este correo? <a href="http://[web_version]" style="color:#000000;">Click</a> aquí</section></td>
                              </tr>-->
                                            </table>
                                            <table width="600" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="600" bgcolor=""><img src="<?php echo Yii::app()->getBaseUrl(true)?>/images/mail/head-mail.png" width="" height="" style="" /></td>
                                                </tr>
                                            </table>
                                            <table width="580" style="margin-top: 0px;" align="center" height="40" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="193" height="40"><p style=" font-size: 21px;text-align: center; color: #7B507B; font-weight: bold;"><?php 
                                                          $nombre = CrugeFieldValue::model()->find('iduser=? AND idfield=1',array($usuario->iduser));
                                                          $genero = CrugeFieldValue::model()->find('iduser=? AND idfield=2',array($usuario->iduser));
                                                    echo  ucwords(($genero->value==1?'señor':'señora').' '.$nombre->value); ?></p></td>
                                                </tr>
                                            </table>
                                         
                                            <table style="margin-top: 0px;" width="580" align="center" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="400">
                                                        <span style="text-align:justify; font-size: 13px; color: #0A0A04; line-height:18px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif"><div>Informamos que se encuentra disponible en nuestra página el documento: <b><?php echo $documento->nombre_documento; ?></b>.</div></span>
                                                        <?php if($documento->mensaje_correo != NULL && $documento->mensaje_correo != ""){
                                                            ?>
                                                        <br/><div><b>Nota: </b><?php echo ucfirst($documento->mensaje_correo); ?></div>
                                                        <?php }?>
                                                        <br/><div>Para ingresar, favor pulsar el botón.</div>
                                                        <br/><br/><p style="color: #7B507B;font-weight: bold">¡Gestion de documentos!</p>
                                                    </td>
                                                    <td width="100">
                                                        <a href="<?php echo Yii::app()->getBaseUrl(true).'/documento/'.$documento->id; ?>" style="text-decoration: none;">
                                                            <div style=" margin-left: 2em;">
                                                            <img  src="<?php echo Yii::app()->getBaseUrl(true);?>/images/mail/icono-mail.png">
                                                                <p style="text-decoration: none;color: #FFFFFF;text-align: center;background-color: #7B507B;margin-right: 13px;margin-top: 6px;">Click aquí</p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table width="580" height="15" align="center" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <table width="600" border="0" align="center" bgcolor="#F2F2F2" cellpadding="0" cellspacing="5" id="separador">
                                                <tr>
                                                 
                                                </tr>
                                            </table>
                                            <table width="600" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="600" bgcolor="#FFFFFF"><img src="<?php echo Yii::app()->getBaseUrl(true)?>/images/mail/linea-inf-mail.png" width="" height="" /></td>
                                                </tr>
                                            </table>



                                        </td>
                                        <td width="30"></td>
                                    </tr>
                                </table>

                                <!-- End Iphone Wrapper -->

                            </td>
                        </tr>
                    </table><!-- End Main wrapper -->

                </td>
            </tr>
        </table><!-- End Wrapper -->

        <!-- Done -->

    </body>
</html>