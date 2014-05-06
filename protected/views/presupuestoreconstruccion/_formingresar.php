<?php
/* @var $this InformacionGeneralController */
/* @var $model InformacionGeneral */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-general-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'personaEntrevistada'); ?>
		<?php echo $form->textField($model,'personaEntrevistada',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'personaEntrevistada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personaEncargadaAdministracion'); ?>
		<?php echo $form->textField($model,'personaEncargadaAdministracion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'personaEncargadaAdministracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->