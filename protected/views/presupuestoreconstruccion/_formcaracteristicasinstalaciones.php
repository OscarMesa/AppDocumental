	<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/general.js', CClientScript::POS_END); ?>
	
	<?php $SN = array('Si'=>'Si', 'No'=>'No'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'acueductoPropio'); ?>
		<?php echo $form->radioButtonList($model,'acueductoPropio',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'acueductoPropio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aRedPublica'); ?>
		<?php echo $form->radioButtonList($model,'aRedPublica',$SN,array('onclick'=>'muestraredpublica("cualredpublicamostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'aRedPublica'); ?>
	</div>

	<?php $model->aRedPublica=='Si' ? $redpublicamostrar='block' : $redpublicamostrar='none' ?>
	<div class="row" id="cualredpublicamostrar" style="display:<?php echo $redpublicamostrar; ?>">
		<?php echo $form->labelEx($model,'aCual'); ?>
		<?php echo $form->textField($model,'aCual',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'aCual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoRejillas'); ?>
		<?php echo $form->dropDownList($model,'estadoRejillas',array(''=>'','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo')); ?>
		<?php echo $form->error($model,'estadoRejillas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCanales'); ?>
		<?php echo $form->dropDownList($model,'estadoCanales',array(''=>'','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo')); ?>
		<?php echo $form->error($model,'estadoCanales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoAlcantarillas'); ?>
		<?php echo $form->dropDownList($model,'estadoAlcantarillas',array(''=>'','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo')); ?>
		<?php echo $form->error($model,'estadoAlcantarillas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limpiezaTechos'); ?>
		<?php echo $form->dropDownList($model,'limpiezaTechos',array(''=>'','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo')); ?>
		<?php echo $form->error($model,'limpiezaTechos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoBajantes'); ?>
		<?php echo $form->dropDownList($model,'estadoBajantes',array(''=>'','Bueno'=>'Bueno','Regular'=>'Regular','Malo'=>'Malo')); ?>
		<?php echo $form->error($model,'estadoBajantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plantaElectrica'); ?>
		<?php echo $form->radioButtonList($model,'plantaElectrica',$SN,array('onclick'=>'muestraplantaelectrica("plantaelectricamostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'plantaElectrica'); ?>
	</div>

	<?php $model->plantaElectrica=='Si' ? $plantaelectricacamostrar='block' : $plantaelectricacamostrar='none' ?>
	<div class="grupo" id="plantaelectricamostrar" style="display:<?php echo $plantaelectricacamostrar; ?>">
		<div class="row">
			<?php echo $form->labelEx($model,'pEMarca'); ?>
			<?php echo $form->textField($model,'pEMarca',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'pEMarca'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pEAño'); ?>
			<?php echo $form->textField($model,'pEAño',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'pEAño'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pEPotencia'); ?>
			<?php echo $form->textField($model,'pEPotencia',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'pEPotencia'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pECombustible'); ?>
			<?php echo $form->textField($model,'pECombustible',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'pECombustible'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pEUbicacionFisica'); ?>
			<?php echo $form->textField($model,'pEUbicacionFisica',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'pEUbicacionFisica'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'pEZonaAlimenta'); ?>
			<?php echo $form->textField($model,'pEZonaAlimenta',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'pEZonaAlimenta'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transformadorPropio'); ?>
		<?php echo $form->radioButtonList($model,'transformadorPropio',$SN,array('onclick'=>'muestratransformadorpropio("transformadorpropiomostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'transformadorPropio'); ?>
	</div>

	<?php $model->transformadorPropio=='Si' ? $transformadorpropiomostrar='block' : $transformadorpropiomostrar='none' ?>
	<div class="grupo" id="transformadorpropiomostrar" style="display:<?php echo $transformadorpropiomostrar; ?>">
		<div class="row">
			<?php echo $form->labelEx($model,'tPMarca'); ?>
			<?php echo $form->textField($model,'tPMarca',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'tPMarca'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tPAño'); ?>
			<?php echo $form->textField($model,'tPAño',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'tPAño'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tPCapacidad'); ?>
			<?php echo $form->textField($model,'tPCapacidad',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'tPCapacidad'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tPUbicacionFisica'); ?>
			<?php echo $form->textField($model,'tPUbicacionFisica',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'tPUbicacionFisica'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaGas'); ?>
		<?php echo $form->radioButtonList($model,'sistemaGas',$SN,array('onclick'=>'muestrasistemagas("sistemagasmostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaGas'); ?>
	</div>

	<?php $model->sistemaGas=='Si' ? $sistemagasmostrar='block' : $sistemagasmostrar='none' ?>
	<div class="grupo" id="sistemagasmostrar" style="display:<?php echo $sistemagasmostrar; ?>">
		<div class="row">
			<?php echo $form->labelEx($model,'sGRedPublica'); ?>
			<?php echo $form->radioButtonList($model,'sGRedPublica',$SN,array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
			<?php echo $form->error($model,'sGRedPublica'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sGTanqueAlmacenamiento'); ?>
			<?php echo $form->radioButtonList($model,'sGTanqueAlmacenamiento',$SN,array('onclick'=>'muestratanquealmacenamiento("tanquealmacenamientomostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
			<?php echo $form->error($model,'sGTanqueAlmacenamiento'); ?>
		</div>
		
		<?php $model->sGTanqueAlmacenamiento=='Si' ? $tanquealmacenamientomostrar='block' : $tanquealmacenamientomostrar='none' ?>
		<div class="row" id="tanquealmacenamientomostrar" style="display:<?php echo $tanquealmacenamientomostrar; ?>">
			<?php echo $form->labelEx($model,'sGCapacidadTanque'); ?>
			<?php echo $form->textField($model,'sGCapacidadTanque',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'sGCapacidadTanque'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'sGUtilizaCilindros'); ?>
			<?php echo $form->radioButtonList($model,'sGUtilizaCilindros',$SN,array('onclick'=>'muestrautilizacilindros("utilizacilindrosmostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
			<?php echo $form->error($model,'sGUtilizaCilindros'); ?>
		</div>

		<?php $model->sGUtilizaCilindros=='Si' ? $utilizacilindrosmostrar='block' : $utilizacilindrosmostrar='none' ?>
		<div class="row" id="utilizacilindrosmostrar" style="display:<?php echo $utilizacilindrosmostrar; ?>">
			<?php echo $form->labelEx($model,'sGCapacidad'); ?>
			<?php echo $form->textField($model,'sGCapacidad',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'sGCapacidad'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaAireAcondicionado'); ?>
		<?php echo $form->radioButtonList($model,'sistemaAireAcondicionado',$SN,array('onclick'=>'muestraaireacondicionado("aireacondicionadomostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'sistemaAireAcondicionado'); ?>
	</div>

	<?php $model->sistemaAireAcondicionado=='Si' ? $aireacondicionadomostrar='block' : $aireacondicionadomostrar='none' ?>
	<div class="grupo" id="aireacondicionadomostrar" style="display:<?php echo $aireacondicionadomostrar; ?>">
		<div class="row">
			<?php echo $form->labelEx($model,'aATipoSistema'); ?>
			<?php echo $form->textField($model,'aATipoSistema',array('size'=>60,'maxlength'=>250)); ?>
			<?php echo $form->error($model,'aATipoSistema'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'aACapacidad'); ?>
			<?php echo $form->textField($model,'aACapacidad',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'aACapacidad'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'aATorreEnfriamiento'); ?>
			<?php echo $form->radioButtonList($model,'aATorreEnfriamiento',$SN,array('onclick'=>'muestratorreenfriamiento("torreenfriamientomostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
			<?php echo $form->error($model,'aATorreEnfriamiento'); ?>
		</div>
		
		<?php $model->aATorreEnfriamiento=='Si' ? $torreenfriamientomostrar='block' : $torreenfriamientomostrar='none' ?>
		<div id="torreenfriamientomostrar" style="display:<?php echo $torreenfriamientomostrar; ?>">
			<div class="row">
				<?php echo $form->labelEx($model,'aATECapacidad'); ?>
				<?php echo $form->textField($model,'aATECapacidad',array('size'=>25,'maxlength'=>25)); ?>
				<?php echo $form->error($model,'aATECapacidad'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'aATECantidad'); ?>
				<?php echo $form->textField($model,'aATECantidad',array('size'=>25,'maxlength'=>25)); ?>
				<?php echo $form->error($model,'aATECantidad'); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoInstalacionesFisicas'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoInstalacionesFisicas',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientoinstalacionesfisicas("mantenimientoinstalacionesfisicasmostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoInstalacionesFisicas'); ?>
	</div>

	<?php $model->mantenimientoInstalacionesFisicas!='' ? $mantenimientoinstalacionesfisicasmostrar='block' : $mantenimientoinstalacionesfisicasmostrar='none' ?>
	<div class="row" id="mantenimientoinstalacionesfisicasmostrar" style="display:<?php echo $mantenimientoinstalacionesfisicasmostrar; ?>">
		<?php echo $form->labelEx($model,'mIFPersonalACargo'); ?>
		<?php echo $form->textField($model,'mIFPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mIFPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoPlantaElectrica'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoPlantaElectrica',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientoplantaelectrica("mantenimientoplantaelectricamostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoPlantaElectrica'); ?>
	</div>

	<?php $model->mantenimientoPlantaElectrica!='' ? $mantenimientoplantaelectricamostrar='block' : $mantenimientoplantaelectricamostrar='none' ?>
	<div class="row" id="mantenimientoplantaelectricamostrar" style="display:<?php echo $mantenimientoplantaelectricamostrar; ?>">
		<?php echo $form->labelEx($model,'mPEPersonalACargo'); ?>
		<?php echo $form->textField($model,'mPEPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mPEPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientosubestaciónElectrica'); ?>
		<?php echo $form->dropDownList($model,'mantenimientosubestaciónElectrica',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientosubestacionelectrica("mantenimientosubestacionelectricamostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientosubestaciónElectrica'); ?>
	</div>

	<?php $model->mantenimientosubestaciónElectrica!='' ? $mantenimientosubestacionelectricamostrar='block' : $mantenimientosubestacionelectricamostrar='none' ?>
	<div class="row" id="mantenimientosubestacionelectricamostrar" style="display:<?php echo $mantenimientosubestacionelectricamostrar; ?>">
		<?php echo $form->labelEx($model,'mSEPersonalACargo'); ?>
		<?php echo $form->textField($model,'mSEPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mSEPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoTransformadorPropio'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoTransformadorPropio',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientotransformadorpropio("mantenimientotransformadorpropiomostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoTransformadorPropio'); ?>
	</div>

	<?php $model->mantenimientoTransformadorPropio!='' ? $mantenimientotransformadorpropiomostrar='block' : $mantenimientotransformadorpropiomostrar='none' ?>
	<div class="row" id="mantenimientotransformadorpropiomostrar" style="display:<?php echo $mantenimientotransformadorpropiomostrar; ?>">
		<?php echo $form->labelEx($model,'mTPPersonalACargo'); ?>
		<?php echo $form->textField($model,'mTPPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mTPPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoSistemaGas'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoSistemaGas',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientosistemagas("mantenimientosistemagasmostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoSistemaGas'); ?>
	</div>

	<?php $model->mantenimientoSistemaGas!='' ? $mantenimientosistemagasmostrar='block' : $mantenimientosistemagasmostrar='none' ?>
	<div class="row" id="mantenimientosistemagasmostrar" style="display:<?php echo $mantenimientosistemagasmostrar; ?>">
		<?php echo $form->labelEx($model,'mSGPersonalACargo'); ?>
		<?php echo $form->textField($model,'mSGPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mSGPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoAscensores'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoAscensores',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientoascensores("mantenimientoascensoresmostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoAscensores'); ?>
	</div>

	<?php $model->mantenimientoAscensores!='' ? $mantenimientoascensoresmostrar='block' : $mantenimientoascensoresmostrar='none' ?>
	<div class="row" id="mantenimientoascensoresmostrar" style="display:<?php echo $mantenimientoascensoresmostrar; ?>">
		<?php echo $form->labelEx($model,'mAPersonalACargo'); ?>
		<?php echo $form->textField($model,'mAPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mAPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoDispositivosSeguridad'); ?>
		<?php echo $form->dropDownList($model,'mantenimientoDispositivosSeguridad',array(''=>'','Preventivo'=>'Preventivo','Predictivo'=>'Predictivo','Correctivo'=>'Correctivo'),array('onclick'=>'muestramantenimientodispositivosseguridad("mantenimientodispositivosseguridadmostrar",this.value)')); ?>
		<?php echo $form->error($model,'mantenimientoDispositivosSeguridad'); ?>
	</div>

	<?php $model->mantenimientoDispositivosSeguridad!='' ? $mantenimientodispositivosseguridadmostrar='block' : $mantenimientodispositivosseguridadmostrar='none' ?>
	<div class="row" id="mantenimientodispositivosseguridadmostrar" style="display:<?php echo $mantenimientodispositivosseguridadmostrar; ?>">
		<?php echo $form->labelEx($model,'mDSPersonalACargo'); ?>
		<?php echo $form->textField($model,'mDSPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mDSPersonalACargo'); ?>
	</div>