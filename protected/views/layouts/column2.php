<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main');
?>
<div class="span-19">
    <div id="content" class="<?php echo strpos(Yii::app()->controller->getRoute(), 'documento') || strpos(Yii::app()->controller->getRoute(), 'noticia') !== false ? 'seccion-1' : ''; ?>">
        <?php
        echo $content;
        ?>
    </div>
</div>
<div id="menu-lateral" class="span-5">
    <?php if (strpos(Yii::app()->controller->getRoute(), 'documento/index') !== false) { ?>

        <div class="busquedas">

<!--            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="busqueda-noticias" type="text" placeholder="Buscar noticia">
            </div>-->
            <!--        <input type="text" placeholder=""/>-->
            <div class="header-busquedas">Archivos</div>
            <div class="fechas-busqueda">
                <?php
//                $list = Yii::app()->db->createCommand('SELECT DATE_FORMAT( fecha_creacion, "%Y" ) "year", DATE_FORMAT( fecha_creacion, "%m" ) " month" FROM `documento` GROUP BY DATE_FORMAT( fecha_creacion, "%Y-%m" ) ORDER BY fecha_creacion DESC')->queryAll();
//                foreach ($list as $value) {
//                    echo '<a href="#" class="filter" type="date" value="'. $value['year'] . '-' . $value['month'] .'">' . $value['year'] . ' | ' . date('M', mktime(0, 0, 0, $value['month'], 1, 2000)) . '</a><br/>';
//                }
                ?>
                <div id="fixed-tree"></div>
            </div>
            <div class="header-busquedas">Categorías</div>
            <!--        http://designwithpc.com/Plugins/ddSlick#demo-->
            <?php
            $categorias = array('all'=>"Todos") + CHtml::listData(Categoria::model()->findAll(), 'id_cat', 'nombre');
            echo CHtml::dropDownList('categorias-select', '----', $categorias);
            ?>
            <br/><br/>
            <div class="header-busquedas">Tipos de documentos</div>
            <!--        http://designwithpc.com/Plugins/ddSlick#demo-->
            <?php
            $tipos = array('all'=>"Todos") + CHtml::listData(TipoDocumento::model()->findAll(), 'id', 'nombre');
            echo CHtml::dropDownList('categorias-select', '----', $tipos,array('id'=>'tipos_doc_select'));
            ?>
        </div>
    <?php } ?>
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'list',
        'items' => $this->menu,
    ));
    ?>
</div>
<?php $this->endContent(); ?>