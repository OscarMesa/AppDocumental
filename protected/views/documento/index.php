<?php
/* @var $this DocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentos',
);

$this->menu = array(
        array('label'=>'Operaciones'),
        array('label'=>'Crear Documento','icon'=>'pencil', 'url'=>array('create')),
        array('label'=>'Administrador de Documentos','icon'=>'eye-open', 'url'=>array('admin')),
        array('label'=>'Listar', 'icon'=>'list-alt', 'url'=>'#', 'active'=>true),
    );


?>

<h1>Documentos</h1>

<?php 
$this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
