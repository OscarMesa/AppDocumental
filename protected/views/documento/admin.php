<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs = array(
    'Documentos' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Crear Documento', 'icon' => 'pencil', 'url' => 'create'),
    array('label' => 'Administrador de Documentos', 'active' => true, 'icon' => 'eye-open', 'url' => array('#')),
    array('label' => 'Lista de Documentos', 'icon' => 'list-alt', 'url' => array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de documentos</h1>

<p>
    También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$dataProvider = $model->search();
$dataProvider->pagination->pageSize = 6;
$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'id' => 'documento-grid',
    'dataProvider' => $dataProvider,
    'filter' => $model,
    'columns' => array(
        'id',
        'nombre_documento',
        'tipo',
        array(
            'name' => 'binaryfile',
            'value' => function($data) {
                 return  '<a href =' . Yii::app()->getBaseUrl(true) . '/data/attachment/' . $data->nombre_doc_bd . ' download="'. $data->nombre_doc .'">' . $data->nombre_doc . '</a>';
            },
            'type' => 'raw'
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
