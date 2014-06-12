<?php
$this->breadcrumbs=array(
	'Noticias',
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Crear Noticia', 'icon' => 'pencil','url'=>array('create')),
	array('label'=>'Administrar Noticias', 'icon' => 'eye-open','url'=>array('admin')),
        array('label'=>'Listar Noticias', 'icon' => 'list-alt','active' => true,'url'=>''),
);
?>

<h1>Noticias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

