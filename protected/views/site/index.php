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
            <br/>
            <?php
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $dataProviderInd,
                'itemView' => 'application.views.indicadores._view_1',
                'id' => 'lista-archivos'
            ));
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
<script type="text/javascript">
// <![CDATA[
var bgHost = "http://www.applab.in/";
var bgType = "CO-19284-1";
var bgIndi = "1|2|3|4|5|6|7|8|9|10";
(function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src='"+f+"' type='text/javascript'%3E%3C/script%3E")); })(document);
// ]]>
</script> 