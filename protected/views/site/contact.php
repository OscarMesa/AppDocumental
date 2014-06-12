<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contáctanos';
$this->breadcrumbs = array(
    'Contáctanos',
);
?>

<h1>Contáctanos</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-
         La información marcada con.success">
         <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <p>
        Si tiene consultas comerciales u otras preguntas, por favor completa el siguiente formulario para contactar con nosotros. Gracias.
    </p>

    <div class="form">
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
                <div class="row">
                        <?php echo $form->labelEx($model, 'verifyCode'); ?>
                    <div>
        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->textField($model, 'verifyCode'); ?>
                    </div>
                    <div class="hint">Por favor introduce las letras tal como se muestran en la imagen de arriba.
                        <br/>Las letras no distinguen entre mayúsculas y minúsculas.</div>
                <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
    <?php endif; ?>


            <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Enviar')); ?>
            </div>

    <?php $this->endWidget(); ?>
        </fieldset>
    </div><!-- form -->

<?php endif; ?>