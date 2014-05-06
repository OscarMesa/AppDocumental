<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presupuesto-reconstruccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
	
	<?php
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
		'panels'=>array(
			'Información General'=>$this->renderPartial('_forminformaciongeneral',array('model'=>$model,'form'=>$form),true),
			'Información Predio'=>$this->renderPartial('_forminformacionpredio',array('model'=>$model,'form'=>$form),true),
		),
		// additional javascript options for the accordion plugin
		'options'=>array(
			'collapsible'=> true,
			'animated'=>'bounceslide',
			'autoHeight'=>false,
			'active'=>2,
		),
	));
	?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Create'); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->