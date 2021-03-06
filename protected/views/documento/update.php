<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Modificar Documento','active' => true, 'icon' => 'pencil', 'url' => '#'),
    array('label' => 'Crear Documento', 'icon' => 'pencil', 'url' => array('create')),
    array('label' => 'Administrador de Documentos', 'icon' => 'eye-open', 'url' => array('admin')),
    array('label' => 'Lista de Documentos', 'icon' => 'list-alt', 'url' => array('index')),
);
?>

<h1>Actualizar Documento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>