<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->id,
);

$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Crear Documento','active' => true, 'icon' => 'pencil', 'url' => '#'),
    array('label'=>'Actualizar Documento','icon' => 'edit', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Eliminar Documento', 'url'=>'#','icon' => 'remove', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Está seguro que desea eliminar este elemento?')),
    array('label' => 'Administrador de Documentos', 'icon' => 'eye-open', 'url' => array('admin')),
    array('label' => 'Lista de Documentos', 'icon' => 'list-alt', 'url' => array('index')),
);
?>

<h1>View Documento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_documento',
		'tipo',
		array(               // related city displayed as a link
            'label'=>'Descargar documento',
            'type'=>'raw',
            'value'=> '<a href ='.Yii::app()->getBaseUrl(true).'/data/attachment/'.$model->nombre_doc_bd.' download="'. $model->nombre_doc .'">'.$model->nombre_doc.'</a>',
        )
	),
)); ?>
