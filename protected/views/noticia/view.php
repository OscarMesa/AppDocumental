<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label' => 'Operaciones'),
	array('label'=>'Ver noticia', 'icon' => 'icon-fullscreen','active' => true,'url'=>''),
	array('label'=>'Crear Noticia', 'icon' => 'pencil','url'=>array('create')),
	array('label'=>'Actualizar Noticia','icon' => 'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar Noticia','icon' => 'icon-remove','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Realmente deseas eliminar esta noticia?')),
	array('label'=>'Administrar Noticias', 'icon' => 'eye-open','url'=>array('admin')),
        array('label'=>'Listar Noticias','icon' => 'list-alt','url'=>array('index')),
);
?> 

<h1>Noticia #<?php echo $model->id; ?></h1>

<?php 
Yii::import('application.models.CrugeUser');
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imagen',
		'descripcion',
            array(
            'name' => 'id_user',
            'value' => function($data) {
                $user = CrugeUser::model()->findByPk($data->id_user);
                return $user->username;
                   },
               ),
		'url_referente',
		'titulo',
		'fecha_creacion',
	),
)); ?>
