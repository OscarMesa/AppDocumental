<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),'Create',
);


$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Crear Documento','active' => true, 'icon' => 'pencil', 'url' => '#'),
    array('label' => 'Administrador de Documentos', 'icon' => 'eye-open', 'url' => array('admin')),
    array('label' => 'Lista de Documentos', 'icon' => 'list-alt', 'url' => array('index')),
);
?>

<h1>Crear Documento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>