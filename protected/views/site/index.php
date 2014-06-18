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
            <!-- Dolar Wilkinsonpc Ind-Eco-Avanzado Start -->
            <!--            <div id="IndEcoAvanzado"><h2><a href="http://dolar.wilkinsonpc.com.co/">Dolar en Colombia</a></h2>
                            <a href="http://dolar.wilkinsonpc.com.co/indicadores-economicos-dolar.html">Indicadores Economicos</a></div>
                        <script type="text/javascript" src="http://dolar.wilkinsonpc.com.co/js/ind-eco-avanzado.js"></script> Dolar Wilkinsonpc Ind-Eco-Avanzado End -->
            <br/>
            <?php
            $this->widget('bootstrap.widgets.TbListView', array(
                'dataProvider' => $dataProviderInd,
                'itemView' => 'application.views.indicadores._view_1',
                'id' => 'lista-indicadores'
            ));
            ?>
        </div>
    </div>
    <div class="span8">
<!--        <img src="<?php //echo Yii::app()->getBaseUrl(true)   ?>/images/noticias.png"/>-->
        <?php
        Yii::import('application.vendor.Utilidades');
        $this->widget('bootstrap.widgets.TbListView', array(
            'dataProvider' => $dataProviderNot,
            'itemView' => 'application.views.noticia._view_1',
            'summaryText' => '',
            'id' => 'lista-noticias'
        ));
        ?>
    </div>
</section>
<!--<script type="text/javascript">
// <![CDATA[
var bgHost = "http://www.applab.in/";
var bgType = "CO-19284-1";
var bgIndi = "1|2|3|4|5|6|7|8|9|10";
(function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src='"+f+"' type='text/javascript'%3E%3C/script%3E")); })(document);
// ]]>
</script> -->

<script type = "text/javascript" src = "http://www.colombia.com/includes/2007/enlaces/actualidad_indicadores.js" ></script>
<script type="text/javascript">
    function g(id) {
        return document.getElementById(id);
    }
    window.onload = function() {
        $('#lista-indicadores .items').prepend('<li class="indicador">Café(Uscent - Libra)<span id="CAFE">'+IndCaf+'</span></li><li class="indicador">Petróleo WTI<span id="PETROLEO">'+IndPet+'</span></li><li class="indicador">UVR<span id="UVR">'+IndUVR+'</span></li><li class="indicador">DTF<span id="DTF">'+IndDTF+'</span></li><li class="indicador">IGBC<span id="IGBC">'+IndIGBC+'</span></li><li class="indicador">EURO<span id="EURO">'+IndEuro+'</span></li><li class=""><b>Dólar</b></li><li class="indicador">TRM<span id="TRM">'+IndDolTRM+'</span></li><li class="indicador">Compra casa de cambio<span id="USDCOMPRA">'+IndDolComCas+'</span></li><li class="indicador">Venta casa de cambio<span id="USDVENTA">'+IndDolVenCas+'</span></li><li class=""><b>Otros indicadores</b></li>');
    }
</script>
<!--http://www.nerdcoder.com/indicadores-economicos-con-javascript-colombia/-->

