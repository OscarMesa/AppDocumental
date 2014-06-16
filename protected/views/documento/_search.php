<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<fieldset>
		<?php echo $form->textFieldRow($model,'id', array('class'=>'')); ?>
	
		<?php echo $form->textFieldRow($model,'nombre_documento',array('class'=>'','size'=>60,'maxlength'=>100)); ?>
	
		<?php echo $form->dropDownListRow($model,'id_tipo',CHtml::listData(TipoDocumento::model()->findAll(), 'id', 'nombre'),array()); ?>

</fieldset>

	<div class="form-actions">
            
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Buscar')); ?>
	</div>

<?php $this->endWidget(); ?>
