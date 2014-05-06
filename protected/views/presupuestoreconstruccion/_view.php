<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $data PresupuestoReconstruccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPresupuestoReconstruccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPresupuestoReconstruccion), array('view', 'id'=>$data->idPresupuestoReconstruccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copropiedad')); ?>:</b>
	<?php echo CHtml::encode($data->copropiedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nitCc')); ?>:</b>
	<?php echo CHtml::encode($data->nitCc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaVisita')); ?>:</b>
	<?php echo CHtml::encode($data->fechaVisita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intermediario')); ?>:</b>
	<?php echo CHtml::encode($data->intermediario); ?>
	<br />


</div>