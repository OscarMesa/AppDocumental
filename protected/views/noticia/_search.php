<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>
<?php 
 Yii::import('application.models.CrugeUser');
 //print_r(CrugeUser::model()->findAll());

?>
	<?php echo $form->dropDownListRow($model,'id_user', CHtml::listData(CrugeUser::model()->findAll(), 'iduser', 'username') ,array('class'=>'span5','prompt'=>'Todos')); ?>

        <?php echo $form->textFieldRow($model,'titulo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'url_referente',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'fecha_creacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
