<?php
/* @var $this DocumentoController */
/* @var $data Noticia */

Yii::import('application.models.CrugeUser');

?>
<div class="row-fluid span5">
    <p class="fron-fecha"><?php echo strftime('%A %d de %B de %Y %H:%M ', strtotime($data->fecha_creacion)); ?></p>
    <b class="fron-titulo"><?php echo $data->titulo;?></b>       
    <p class="fron-user-atualizado">Actualizado por:<?php echo $data->user->username;?></p>
    <div class="fron-image"><img width="300" height="300" src="<?php echo $data->imagen;?>"/></div>
    <div class="fron-descripcion"><?php echo Utilidades::getSubString($data->descripcion, 300);?></div>
    <a target="_blank" class="fron-referente" href="<?php echo $data->url_referente;?>">Leer mas</a>
 </div>