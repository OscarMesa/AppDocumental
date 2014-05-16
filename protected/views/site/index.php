<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array(
            'image'=>Yii::app()->getBaseUrl(true).'/images/banner/banner1.jpg',
        ),
        array(
            'image'=>Yii::app()->getBaseUrl(true).'/images/banner/banner2.jpg',
        ),
        array(
            'image'=>Yii::app()->getBaseUrl(true).'/images/banner/banner3.jpg',
            
        ),
    ),
));
?>

<div class="grid-100">
    <img src="<?php echo Yii::app()->getBaseUrl(true)?>/images/iconos/img-index.png"/>
</div>