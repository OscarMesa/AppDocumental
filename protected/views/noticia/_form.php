<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'noticia-form',
    'enableAjaxValidation' => false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
        ));
?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'titulo', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'url_referente', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php //echo $form->textFieldRow($model, 'id_user', array('class' => 'span5')); ?>
<div class="form-actions">
    <label class="radio">
        <input type="radio" value="url-img" name="option-img" id="url-img" <?php echo $model->scenario!="insert_img"?"checked":"";?>>
        URL imagen
    </label>

    <label class="radio">
        <input type="radio" name="option-img" id="subir-img" value="subir-img" <?php echo $model->scenario=="insert_img"?"checked":"";?>>
        Subir imagen
    </label>
    <div id="content-img-url" style="display: <?php echo $model->scenario!="insert_img"?"block":"none";?>">
        <?php echo $form->textFieldRow($model, 'imagen', array('class' => 'span5', 'maxlength' => 200)); ?>
    </div>
    <div id="content-img-file" style="display: <?php echo $model->scenario=="insert_img"?"block":"none";?>">
<?php echo $form->fileFieldRow($model, 'FileImagen', array('class' => 'span5', 'style' => '')); ?>
    </div>
</div>

<?php echo $form->textAreaRow($model, 'descripcion', array('rows' => 6, 'cols' => 50, 'class' => 'span7')); ?>

    <?php echo $form->hiddenField($model, 'fecha_creacion', array('value' => date('Y-m-d H:i:s'))); ?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Crear' : 'Guardar',
    ));
    ?>
</div>

<?php $this->endWidget(); 


Yii::app()->clientScript->registerScript('cambioRadioButton', "$('#url-img').on('change', function() {
        $('#content-img-file').fadeOut();
        $('#content-img-url').show('clip');

    });
    $('#subir-img').on('change', function() {
        setTimeout(function(){ $('#content-img-file').show('clip');},500);
        $('#content-img-url').fadeOut();
    });", 4);
?>


