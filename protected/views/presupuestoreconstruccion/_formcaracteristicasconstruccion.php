	<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/general.js', CClientScript::POS_END); ?>
	
	<?php $SN = array('Si'=>'Si', 'No'=>'No'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NPisos'); ?>
		<?php echo $form->textField($model,'NPisos'); ?>
		<?php echo $form->error($model,'NPisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NSotanos'); ?>
		<?php echo $form->textField($model,'NSotanos'); ?>
		<?php echo $form->error($model,'NSotanos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existeMezanine'); ?>
		<?php echo $form->radioButtonList($model,'existeMezanine',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'existeMezanine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pisoRiesgo'); ?>
		<?php echo $form->textField($model,'pisoRiesgo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pisoRiesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'areaRiesgo'); ?>
		<?php echo $form->textField($model,'areaRiesgo'); ?>
		<?php echo $form->error($model,'areaRiesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mamposteriaReforzada'); ?>
		<?php echo $form->radioButtonList($model,'mamposteriaReforzada',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'mamposteriaReforzada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mamposteriaConfinada'); ?>
		<?php echo $form->radioButtonList($model,'mamposteriaConfinada',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'mamposteriaConfinada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaReticularCelulado'); ?>
		<?php echo $form->radioButtonList($model,'sistemaReticularCelulado',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaReticularCelulado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SistemaPorticoConcreto'); ?>
		<?php echo $form->radioButtonList($model,'SistemaPorticoConcreto',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'SistemaPorticoConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unaDireccionC'); ?>
		<?php echo $form->radioButtonList($model,'unaDireccionC',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'unaDireccionC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosDireccionesC'); ?>
		<?php echo $form->radioButtonList($model,'dosDireccionesC',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'dosDireccionesC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaPorticoAcero'); ?>
		<?php echo $form->radioButtonList($model,'sistemaPorticoAcero',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaPorticoAcero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unaDireccionA'); ?>
		<?php echo $form->radioButtonList($model,'unaDireccionA',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'unaDireccionA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosDireccionesA'); ?>
		<?php echo $form->radioButtonList($model,'dosDireccionesA',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'dosDireccionesA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaDualConcreto'); ?>
		<?php echo $form->radioButtonList($model,'sistemaDualConcreto',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaDualConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaMurosEstructurales'); ?>
		<?php echo $form->radioButtonList($model,'sistemaMurosEstructurales',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaMurosEstructurales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maderaTejaBarro'); ?>
		<?php echo $form->radioButtonList($model,'maderaTejaBarro',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'maderaTejaBarro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerchaMetalicaTejaLiviana'); ?>
		<?php echo $form->radioButtonList($model,'cerchaMetalicaTejaLiviana',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'cerchaMetalicaTejaLiviana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'losaConcreto'); ?>
		<?php echo $form->radioButtonList($model,'losaConcreto',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'losaConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otro'); ?>
		<?php echo $form->radioButtonList($model,'otro',$SN,array('onclick'=>'muestraotrocc("cualmostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'otro'); ?>
	</div>

	<?php $model->otro=='Si' ? $mcualcc='block' : $mcualcc='none' ?>
	
	<div class="row" id="cualmostrar" style="display:<?php echo $mcualcc; ?>">
		<?php echo $form->labelEx($model,'cual'); ?>
		<?php echo $form->textField($model,'cual',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deterioro'); ?>
		<?php echo $form->radioButtonList($model,'deterioro',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'deterioro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>