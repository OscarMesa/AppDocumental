<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'documento-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
        'validateOnType' => false
    ),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
        ));
?>
<fieldset>
    <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->textFieldRow($model, 'nombre_documento', array('class' => 'span3', 'size' => 60, 'maxlength' => 100)); ?>

    <?php echo $form->fileFieldRow($model, 'binaryfile', array('class' => 'span3')); ?>
     
    <p>Asignar categorias a los documentos.</p>
    <div id="Categorias" class="listas_asignacion">
        <?php
        $i = 0;
        $data_Categorias = Chtml::listData(Categoria::model()->findAll(), 'id_cat', 'nombre');
        if (!$model->isNewRecord) {
            $data_Authitem_document = Documento::model()->findByPk($model->id);
            if ($data_Authitem_document->perfiles != null)
                ;
            $data_categorias_document = Chtml::listData($data_Authitem_document->categorias, 'id_cat', 'id_cat');
            foreach ($data_Categorias as $key => $value) {
                $checked = false;
                if (array_key_exists($key, $data_categorias_document))
                    $checked = true;
                echo '<label><input id="Categoria_cat_id_' . $i . '" type="checkbox" name="Categoria[cat_id][]" ' . ($checked ? 'checked' : '') . ' value="' . $key . '">' . ucwords($value) . '</label>';
            }
        }else {
            foreach ($data_Categorias as $key => $value) {
                $checked = false;
                echo '<label><input id="Categoria_cat_id_' . $i . '" type="checkbox" name="Categoria[cat_id][]" value="' . $key . '">' . ucwords($value) . '</label>';
            }
        }
        ?>
    </div>
    
    <p>Asignar documento a los siguientes perfiles. <span class="required">*</span> Recuerde que esta asignación le enviará un correo a todos los usuarios vinculados a estos perfiles.</p>
    <div id="CrugeAuthitem_name" class="listas_asignacion">
        <?php
        $i = 0;
        $data_Authitem = Chtml::listData(CrugeAuthitem::model()->findAll('type=2 AND name NOT IN("invitados")'), 'name', 'name');
        if (!$model->isNewRecord) {
            $data_Authitem_document = Documento::model()->findByPk($model->id);
            if ($data_Authitem_document->perfiles != null)
                ;
            $data_Authitem_document = Chtml::listData($data_Authitem_document->perfiles, 'name', 'name');
            foreach ($data_Authitem as $key => $value) {
                $checked = false;
                if (array_key_exists($key, $data_Authitem_document))
                    $checked = true;
                echo '<label><input id="CrugeAuthitem_name_' . $i . '" type="checkbox" name="CrugeAuthitem[name][]" ' . ($checked ? 'checked' : '') . ' value="' . $key . '">' . $value . '</label>';
            }
        }else {
            foreach ($data_Authitem as $key => $value) {
                $checked = false;
                echo '<label><input id="CrugeAuthitem_name_' . $i . '" type="checkbox" name="CrugeAuthitem[name][]" value="' . $key . '">' . $value . '</label>';
            }
        }
        ?>
    </div>
    <?php
    echo $form->hiddenField($model, 'id_usuario_modificador', array('value' => Yii::app()->user->getId()));
    ?>

<?php echo $form->textAreaRow($model, 'descripcion', array('style' => 'width: 489px; height: 111px;')); ?>

</fieldset>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => ($model->isNewRecord ? 'Crear' : 'Guardar'))); ?>
</div>

<?php $this->endWidget(); ?>
