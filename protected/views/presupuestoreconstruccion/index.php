<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Presupuesto Reconstruccions',
);

$this->menu=array(
	array('label'=>'Create PresupuestoReconstruccion', 'url'=>array('ingresar')),
	array('label'=>'Manage PresupuestoReconstruccion', 'url'=>array('admin')),
);
?>

<h1>Presupuesto Reconstruccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
