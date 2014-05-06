<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstrucción'=>array('index'),
	$modelpr->idPresupuestoReconstruccion=>array('view','id'=>$modelpr->idPresupuestoReconstruccion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Presupuesto Reconstrucción', 'url'=>array('index')),
	array('label'=>'Ingresar Presupuesto Reconstrucción', 'url'=>array('ingresar')),
	array('label'=>'Ver Presupuesto Reconstrucción', 'url'=>array('view', 'id'=>$modelpr->idPresupuestoReconstruccion)),
	array('label'=>'Administrar Presupuesto Reconstrucción', 'url'=>array('admin')),
);
?>

<h1>Actualizar Presupuesto Reconstrucción <?php echo $modelpr->idPresupuestoReconstruccion; ?></h1>

<?php $this->renderPartial('_form2', array('modelpr'=>$modelpr,'modelig'=>$modelig,'modelip'=>$modelip,'modelcc'=>$modelcc,'modelci'=>$modelci)); ?>
