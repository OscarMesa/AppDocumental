<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */
/* @var $form CActiveForm */
?>

<div class="form">


<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true,
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model,$model1)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'copropiedad'); ?>
		<?php echo $form->textField($model,'copropiedad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'copropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nitCc'); ?>
		<?php echo $form->textField($model,'nitCc',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nitCc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaVisita'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'fechaVisita',
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'dd/mm/yy',
                    ),
            ));?>
		<?php echo $form->error($model,'fechaVisita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intermediario'); ?>
		<?php echo $form->textField($model,'intermediario',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'intermediario'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model1,'personaEntrevistada'); ?>
		<?php echo $form->textField($model1,'personaEntrevistada',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model1,'personaEntrevistada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'telefono'); ?>
		<?php echo $form->textField($model1,'telefono',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'personaEncargadaAdministracion'); ?>
		<?php echo $form->textField($model1,'personaEncargadaAdministracion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model1,'personaEncargadaAdministracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'cargo'); ?>
		<?php echo $form->textField($model1,'cargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model1,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'ciudad'); ?>
		<?php echo $form->textField($model1,'ciudad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model1,'ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->