<?php
/* @var $this DocumentoController */
/* @var $data Noticia */

Yii::import('application.models.CrugeUser');
 setlocale(LC_TIME, 'es_ES.UTF-8');
?>
<div class="row-fluid span5">
    <p class="fron-fecha"><?php echo strftime('%A %d de %B de %Y %H:%M ', strtotime($data->fecha_creacion)); ?></p>
    <b class="fron-titulo"><?php echo $data->titulo;?></b>       
    <p class="fron-user-atualizado">Actualizado por:<?php echo $data->user->username;?></p>
    <div class="fron-image"><img width="250" height="250" src="<?php echo $data->imagen=="" || $data->imagen==null?Yii::app()->getBaseUrl(true)."/images/periodico.png":$data->imagen;?>"/></div>
    <div class="fron-descripcion"><?php echo Utilidades::getSubString($data->descripcion, 300);?>
    <?php if($data->url_referente!="" || $data->url_referente!=null){?>
    <a target="_blank" class="fron-referente" href="<?php echo $data->url_referente;?>">Leer mas</a>
    <?php }?></div>
 </div>