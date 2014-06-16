<?php
$this->breadcrumbs=array(
	'Indicadores'=>array('index'),
	'Manage',
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Crear indicadores','icon' => 'pencil', 'url'=>array('create')),
        array('label'=>'Documentos','icon' => 'icon-chevron-right','url'=>array('../documento')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('indicadores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Indicadores</h1>

<p>
    También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'indicadores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ind',
		'nombre_ind',
		'valor',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
