<?php
$this->breadcrumbs=array(
	'Indicadores',
);

$this->menu=array(
	array('label'=>'Create Indicadores','url'=>array('create')),
	array('label'=>'Manage Indicadores','url'=>array('admin')),
);
?>

<h1>Indicadores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
