<?php
$this->breadcrumbs=array(
	'Presupuesto Reconstruccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Presupuesto Reconstrucción', 'url'=>array('index')),
	array('label'=>'Administrar Presupuesto Reconstrucción', 'url'=>array('admin')),
);
?>

<h1>Create Presupuesto Reconstrucción</h1>

<?php $this->renderPartial('_form1', array('model'=>$model)); ?>