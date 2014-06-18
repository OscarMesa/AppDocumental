<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contáctenos';
$this->breadcrumbs = array(
    'Contáctanos',
);
?>

<h1>Contáctenos</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="alert alert-success">
        <strong>
            <?php echo Yii::app()->user->getFlash('contact'); ?></strong>
    </div>

<?php else: ?>

    <p>
        Para contactarnos, favor diligenciar la siguiente información:<br/><br/>
    </p>

    <fieldset>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <p class="note">Los campos marcados <span class="required">*</span> son obligatorios.</p>

        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldRow($model, 'name', array('class' => 'span3')); ?>

        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span3')); ?>

        <?php echo $form->textFieldRow($model, 'subject', array('class' => 'span3', 'size' => 60, 'maxlength' => 128)); ?>

        <?php echo $form->textAreaRow($model, 'body', array('class' => 'span3', 'rows' => 6, 'cols' => 90, 'style' => 'width: 619px; height: 132px;')); ?>


        <?php if (CCaptcha::checkRequirements()): ?>
            <?php echo $form->labelEx($model, 'verifyCode'); ?>
            <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode'); ?>
            </div>
            <div class="hint">Por favor introduce las letras tal como se muestran en la imagen de arriba.
                <br/>Las letras no distinguen entre mayúsculas y minúsculas.</div>
            <?php echo $form->error($model, 'verifyCode'); ?>
        <?php endif; ?>


        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Enviar')); ?>
        </div>

        <?php $this->endWidget(); ?>
    </fieldset>
<?php endif; ?>