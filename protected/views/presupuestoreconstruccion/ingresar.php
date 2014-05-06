<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstrucción'=>array('index'),
	'Ingresar',
);

$this->menu=array(
	array('label'=>'List PresupuestoReconstruccion', 'url'=>array('index')),
	array('label'=>'Manage PresupuestoReconstruccion', 'url'=>array('admin')),
);
?>

<h1>Ingresar Presupuesto Reconstrucción</h1>

<?php $this->renderPartial('_form2', array('modelpr'=>$modelpr,'modelig'=>$modelig,'modelip'=>$modelip,'modelcc'=>$modelcc,'modelci'=>$modelci)); ?>