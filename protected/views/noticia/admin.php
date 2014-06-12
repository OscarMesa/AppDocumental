<?php
Yii::import('application.vendor.Utilidades');
$this->breadcrumbs = array(
    'Noticias' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Listar Noticias', 'icon' => 'list-alt', 'url' => array('index')),
    array('label' => 'Administrar Noticia', 'icon' => 'eye-open', 'active' => true, 'url' => ''),
    array('label' => 'Crear Noticia', 'icon' => 'pencil', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('noticia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Noticias</h1>

<p>
    También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'noticia-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'titulo',
            'value' => function ($data) {
                return Utilidades::getSubString($data->titulo, 15);
            },
            'type' => 'raw'
        ),
        array(
            'name' => 'imagen',
            'value' => function ($data) {
                return Utilidades::getSubString($data->imagen, 35);
            },
            'type' => 'raw'
        ),
        array(
            'name' => 'id_user',
            'value' => function ($data) {
        return $data->user->username;
    },
            'type' => 'raw'
        ),
        array(
            'name' => 'url_referente',
            'value' => function ($data) {
        return Utilidades::getSubString($data->url_referente, 35);
    },
            'type' => 'raw'
        ),
        'fecha_creacion',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
