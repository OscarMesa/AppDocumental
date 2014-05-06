<?php
if($model->informacionGeneral!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>$model->informacionGeneral->getAttributeLabel('personaEntrevistada'),
			'value'=>$model->informacionGeneral->personaEntrevistada,
		),
		array(
			'label'=>$model->informacionGeneral->getAttributeLabel('telefono'),
			'value'=>$model->informacionGeneral->telefono,
		),
		array(
			'label'=>$model->informacionGeneral->getAttributeLabel('personaEncargadaAdministracion'),
			'value'=>$model->informacionGeneral->personaEncargadaAdministracion,
		),
		array(
			'label'=>$model->informacionGeneral->getAttributeLabel('cargo'),
			'value'=>$model->informacionGeneral->cargo,
		),
		array(
			'label'=>$model->informacionGeneral->getAttributeLabel('ciudad'),
			'value'=>$model->informacionGeneral->ciudad,
		),
	),
)); 
}else{
	echo "No se ha ingresado Información General";
}
?>