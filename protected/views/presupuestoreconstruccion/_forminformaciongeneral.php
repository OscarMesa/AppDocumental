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
