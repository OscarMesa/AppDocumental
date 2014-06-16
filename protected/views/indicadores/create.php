<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Administrar Indicadores','icon' => 'eye-open','url'=>array('admin')),
);
?>

<h1>Crear Indicadores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>