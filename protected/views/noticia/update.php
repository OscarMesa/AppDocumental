<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Listar Noticias','icon' => 'list-alt','url'=>array('index')),
	array('label'=>'Crear Noticia', 'icon' => 'pencil','url'=>array('create')),
    array('label'=>'Actualizar Noticia','icon' => 'icon-edit','url'=>'','active' => true),
	array('label'=>'Ver noticia', 'icon' => 'icon-fullscreen','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Noticias', 'icon' => 'eye-open','url'=>array('admin')),
);
?>

<h1>Actualizar Noticia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>