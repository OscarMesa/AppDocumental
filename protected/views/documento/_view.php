<?php
/* @var $this DocumentoController */
/* @var $data Documento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_documento')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo  '<a href ='.Yii::app()->getBaseUrl(true).'/data/attachment/'.$data->nombre_doc_bd.' download>'.$data->nombre_doc.'</a>'; ?>
	<br />

</div>