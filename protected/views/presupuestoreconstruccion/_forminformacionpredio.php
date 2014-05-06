	<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/general.js', CClientScript::POS_END); ?>
	
	<?php $SN = array('Si'=>'Si', 'No'=>'No'); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'predioCopropiedad'); ?>
		<?php echo $form->radioButtonList($model,'predioCopropiedad',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'predioCopropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conjuntoCerrado'); ?>
		<?php echo $form->radioButtonList($model,'conjuntoCerrado',$SN,array('onclick'=>'muestraconjuntocerrado("conjuntocerradomostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'conjuntoCerrado'); ?>
	</div>
	
	<?php $model->conjuntoCerrado=='No' ? $mconjuntocerrado='block' : $mconjuntocerrado='none' ?>
	
	<div class="row" id="conjuntocerradomostrar" style="display:<?php echo $mconjuntocerrado; ?>">
		<?php echo $form->labelEx($model,'conjuntoCerradoOtro'); ?>
		<?php echo $form->textField($model,'conjuntoCerradoOtro',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'conjuntoCerradoOtro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sector'); ?>
		<?php echo $form->textField($model,'sector',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'estrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFundacion'); ?>
		<?php echo $form->textField($model,'fechaFundacion',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'fechaFundacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroEmpleados'); ?>
		<?php echo $form->textField($model,'numeroEmpleados',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numeroEmpleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horarioTrabajo'); ?>
		<?php echo $form->textField($model,'horarioTrabajo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'horarioTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoNorte'); ?>
		<?php echo $form->textField($model,'linderoNorte',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoNorte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoNorteOcupado'); ?>
		<?php echo $form->radioButtonList($model,'linderoNorteOcupado',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?> 
		<?php echo $form->error($model,'linderoNorteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoSur'); ?>
		<?php echo $form->textField($model,'linderoSur',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoSur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoSurOcupado'); ?>
		<?php echo $form->radioButtonList($model,'linderoSurOcupado',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?> 
		<?php echo $form->error($model,'linderoSurOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOriente'); ?>
		<?php echo $form->textField($model,'linderoOriente',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoOriente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOrienteOcupado'); ?>
		<?php echo $form->radioButtonList($model,'linderoOrienteOcupado',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'linderoOrienteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOccidente'); ?>
		<?php echo $form->textField($model,'linderoOccidente',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoOccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOccidenteOcupado'); ?>
		<?php echo $form->radioButtonList($model,'linderoOccidenteOcupado',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'linderoOccidenteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidadesOficiales'); ?>
		<?php echo $form->radioButtonList($model,'entidadesOficiales',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'entidadesOficiales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poliductosMineras'); ?>
		<?php echo $form->radioButtonList($model,'poliductosMineras',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'poliductosMineras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aguasFallas'); ?>
		<?php echo $form->radioButtonList($model,'aguasFallas',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aguasFallas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vias'); ?>
		<?php echo $form->radioButtonList($model,'vias',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'vias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amenazasComunidad'); ?>
		<?php echo $form->radioButtonList($model,'amenazasComunidad',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'amenazasComunidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacionRelacionesComunidad'); ?>
		<?php echo $form->radioButtonList($model,'informacionRelacionesComunidad',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'informacionRelacionesComunidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relacionesComunidadBuenas'); ?>
		<?php echo $form->radioButtonList($model,'relacionesComunidadBuenas',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'relacionesComunidadBuenas'); ?>
	</div>