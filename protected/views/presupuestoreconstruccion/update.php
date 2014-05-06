<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstruccions'=>array('index'),
	$model->idPresupuestoReconstruccion=>array('view','id'=>$model->idPresupuestoReconstruccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresupuestoReconstruccion', 'url'=>array('index')),
	array('label'=>'Create PresupuestoReconstruccion', 'url'=>array('ingresar')),
	array('label'=>'View PresupuestoReconstruccion', 'url'=>array('view', 'id'=>$model->idPresupuestoReconstruccion)),
	array('label'=>'Manage PresupuestoReconstruccion', 'url'=>array('admin')),
);
?>

<h1>Update PresupuestoReconstruccion <?php echo $model->idPresupuestoReconstruccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>