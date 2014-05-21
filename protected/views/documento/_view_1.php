<?php
/* @var $this DocumentoController */
/* @var $data Documento */

setlocale(LC_TIME, 'es_ES');

$extenciones = array(
    'doc' => array('extanciones' => array('doc', 'docx','xsl','xml','pdf','sql'),'img'=> 'icono-doc.png'),
    'mov' => array('extanciones' => array('mov','avi','mpg','wmv','mpeg','mpg3','mp4','flv','dat','mkv'),'img'=> 'icono-video.png'),
    'aud' => array('extanciones' => array('mp3','3gp','act','ogg','wav','wma','wavpack','au'),'img'=> 'icono-audio.png'),
    'foto' => array('extanciones' => array('tiff','raw','png','jpg','jpeg','bmp','gif'),'img'=> 'icono-image.png'),
);

$ext = pathinfo(Yii::app()->basePath.'/data/attachment/'.$data->nombre_doc_bd,PATHINFO_EXTENSION);
$img = 'icono-doc.png';

foreach ($extenciones as  $value) {
    foreach ($value['extanciones'] as $e) {
        if($e == $ext){
            $img = $value['img'];
            break;
        }
    }
}

?>
<div class="row-fluid">
            <div class="span3 content-dia">
                <p class="inicio-dia"><?php echo strftime('%e', strtotime($data->fecha_creacion)); ?></p>
                <div class="inicio-mes"><?php echo strftime('%B', strtotime($data->fecha_creacion)); ?></div>
            </div>
            <div class="span9">
                <b><?php echo CHtml::encode(ucwords($data->nombre_documento)); ?></b>
               
                <p><?php echo CHtml::encode(ucwords(Utilidades::getSubString($data->descripcion, 75))); ?>&nbsp<?php echo !Yii::app()->user->isGuest?'<a href =' . Yii::app()->getBaseUrl(true) . '/data/attachment/' . $data->nombre_doc_bd . ' download="' . $data->nombre_doc . '">Descargar</a>':''; ?> </p>

            </div>
 </div>