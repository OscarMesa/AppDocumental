<?php
/* @var $this DocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Documentos',
);

$this->menu = array(
    array('label' => 'Operaciones'),
    array('label' => 'Crear Documento', 'icon' => 'pencil', 'url' => array('create')),
    array('label' => 'Administrador de Documentos', 'icon' => 'eye-open', 'url' => array('admin')),
    array('label' => 'Listar', 'icon' => 'list-alt', 'url' => '#', 'active' => true),
);
?>
<div id="content-titulo">
    <h4 id="titulos-cabecera">Documentos</h4>
    <div class="linea-titulo">
        <div></div><hr/>
    </div>
</div>
<?php
Yii::import('application.vendor.Utilidades');
$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'id' => 'lista-archivos'
));


Yii::app()->clientScript->registerScript('lista-archivos',
    "var ajaxUpdateTimeout;
    var ajaxRequest;
     $('#categorias-select').change(function(){
        ajaxRequest = {type:'category',value:$(this).val()};
        load_archivos_ajax(ajaxRequest);
    });
    
    $('.filter').click(function(e){
        ajaxRequest = {type:$(this).attr('type'),value:$(this).attr('value')};
        load_archivos_ajax(ajaxRequest);
        e.preventDefault();
    });
    function load_archivos_ajax(ajaxRequest){
        clearTimeout(ajaxUpdateTimeout);
        ajaxUpdateTimeout = setTimeout(function () {
           $.fn.yiiListView.update(
    // this is the id of the CListView
                    'lista-archivos',
                    {data: ajaxRequest}
                )
            },
    // this is the delay
            300);
    }
    "
);

?>


<script type="text/javascript">
    $(document).on('ready',function(){
       
    });
</script>
