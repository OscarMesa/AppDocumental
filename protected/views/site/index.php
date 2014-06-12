<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;

$this->widget('bootstrap.widgets.TbCarousel', array(
    'items' => array(
        array(
            'image' => Yii::app()->getBaseUrl(true) . '/images/banner/banner1.jpg',
        ),
        array(
            'image' => Yii::app()->getBaseUrl(true) . '/images/banner/banner2.jpg',
        ),
        array(
            'image' => Yii::app()->getBaseUrl(true) . '/images/banner/banner3.jpg',
        ),
    ),
));
?>

<section class="row-fluid">
    <div class="span4">
        <div id="Ultimas-actualizaciones" class="">
            <?php
            Yii::import('application.vendor.Utilidades');
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $dataProviderDoc,
                'itemView' => 'application.views.documento._view_1',
                'id' => 'lista-archivos'
            ));
            ?>
        </div>
        <div id="Indicadores-Economicas" class="">
            <div class="header-indicadores">Indicadores Económicos</div>
            <?php
                Yii::import('application.vendor.Utilidades');
                echo Utilidades::getValores();
            ?>
        </div>
    </div>
    <div class="span8">
<!--        <img src="<?php //echo Yii::app()->getBaseUrl(true) ?>/images/noticias.png"/>-->
        <?php
            Yii::import('application.vendor.Utilidades');
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $dataProviderNot,
                'itemView' => 'application.views.noticia._view_1',
                'summaryText'=>'',
                'id' => 'lista-noticias'
            ));
            ?>
    </div>
</section>