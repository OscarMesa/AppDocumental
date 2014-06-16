<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ind')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ind),array('view','id'=>$data->id_ind)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ind')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />


</div>