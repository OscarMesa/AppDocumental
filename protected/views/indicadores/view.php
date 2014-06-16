<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	$model->id_ind,
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Crear Indicador', 'icon' => 'pencil','url'=>array('create')),
	array('label'=>'Modificar Indicador','icon' => 'edit','url'=>array('update','id'=>$model->id_ind)),
	array('label'=>'Eliminar Indicador','icon' => 'remove','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ind),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Indicadores', 'icon' => 'eye-open','url'=>array('admin')),
);
?>

<h1>Indicador #<?php echo $model->id_ind; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_ind',
		'nombre_ind',
		'valor',
	),
)); ?>
