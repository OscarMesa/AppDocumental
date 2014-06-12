<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label' => 'Operaciones'),
        array('label'=>'Crear noticia', 'icon' => 'pencil','active' => true,'url'=>''),
	array('label'=>'Listar Noticias','icon' => 'list-alt','url'=>array('index')),
	array('label'=>'Administrar Noticia', 'icon' => 'eye-open','url'=>array('admin')),
);
?>

<h1>Nueva Noticia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>