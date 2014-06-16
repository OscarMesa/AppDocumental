<?php
/* @var $this DocumentoController */
/* @var $data Documento */

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
<table border = "0">
    <tr>
        <!--    <div class="view grid-100 grid-parent">-->
        <td class="grid-20" style=" width: 10%;">
            <div class="grid-20" style="">
                <img src="<?php echo Yii::app()->getBaseUrl(true) ?>/images/iconos/<?php echo $img; ?>"/>
            </div>
        </td>
        <td class="grid-80" style=" width: 80%;">
            <div class="grid-80" style="">
                <b><?php echo CHtml::encode(ucwords($data->nombre_documento)); ?></b>&nbsp|

                <?php setlocale(LC_TIME, 'es_ES');
                echo strftime('%B %e de %Y', strtotime($data->fecha_creacion)); //echo CHtml::encode(date('F d de Y',  strtotime($data->fecha_cheacion)));  ?><br/>

                <p><?php echo CHtml::encode(ucwords(Utilidades::getSubString($data->descripcion, 200))); ?>&nbsp<?php echo '<a href =' . Yii::app()->getBaseUrl(true) . '/data/attachment/' . $data->nombre_doc_bd . ' download="' . $data->nombre_doc . '">Descargar</a>'; ?></p>
            </div>
        </td>
        <!--</div>-->
    <tr>
</table>   
