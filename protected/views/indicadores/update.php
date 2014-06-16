<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	$model->id_ind=>array('view','id'=>$model->id_ind),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Indicadores', 'icon' => 'pencil','url'=>array('create')),
	array('label'=>'Administrar Indicadores', 'icon' => 'eye-open','url'=>array('admin')),
);
?>

<h1>Modificar Indicadores <?php echo $model->id_ind; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>