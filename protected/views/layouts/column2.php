<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
    <div id="content" class="seccion-1">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div id="menu-lateral" class="span-5">
        <?php
   

    $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=> $this->menu,
)); 

        ?>
    </div>
<?php $this->endContent(); ?>