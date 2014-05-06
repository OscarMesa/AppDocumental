<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstrucción'=>array('index'),
	$model->idPresupuestoReconstruccion,
);

$this->menu=array(
	array('label'=>'Listar Presupuesto Reconstrucción', 'url'=>array('index')),
	array('label'=>'Ingresar Presupuesto Reconstrucción', 'url'=>array('ingresar')),
	array('label'=>'Update Presupuesto Reconstrucción', 'url'=>array('actualizar', 'id'=>$model->idPresupuestoReconstruccion)),
	array('label'=>'Delete Presupuesto Reconstrucción', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPresupuestoReconstruccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Presupuesto Reconstrucción', 'url'=>array('admin')),
);
?>

<h1>View Presupuesto Reconstrucción #<?php echo $model->idPresupuestoReconstruccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'copropiedad',
		'nitCc',
		'direccion',
		'fechaVisita',
		'intermediario',
	),
)); ?>

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
	'id'=>'mydialog_informaciongeneral',
	'options'=>array(
		'title'=>'Información General',
		'width'=>'450',
		'height'=>'250',
		'autoOpen'=>false,
		'resizable'=>false,
		'modal'=>true,
	),
)); 

if($model->informacionGeneral!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEntrevistada,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->telefono,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEncargadaAdministracion,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->cargo,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->ciudad,
		),
	),
)); 
}else{
	echo "No se ha ingresado Información General";
}

 $this->endWidget('zii.widgets.jui.CJuiDialog'); 
 
 echo CHtml::link('Información General', '', array('onclick'=>'$("#mydialog_informaciongeneral").dialog("open"); return false;',));
 
?>
<br>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
	'id'=>'mydialog_informacionpredio',
	'options'=>array(
		'title'=>'Información Predio',
		'width'=>'450',
		'height'=>'250',
		'autoOpen'=>false,
		'resizable'=>false,
		'modal'=>true,
	),
)); 

if($model->informacionPredio!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEntrevistada,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->telefono,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEncargadaAdministracion,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->cargo,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->ciudad,
		),
	),
)); 
}else{
	echo "No se ha ingresado Información Predio";
}

 $this->endWidget('zii.widgets.jui.CJuiDialog'); 
 
 echo CHtml::link('Información Predio', '', array('onclick'=>'$("#mydialog_informacionpredio").dialog("open"); return false;',));

 
 
 $this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Información General'=>'content for panel 1',
        'Información Predio'=>'content for panel 2',
        // panel 3 contains the content rendered by a partial view
        'panel 3'=>$this->renderPartial('_partial',array('model'=>$model),true),
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'collapsible'=> true,
        'animated'=>'bounceslide',
	    'autoHeight'=>false,
        'active'=>2,
    ),
));

