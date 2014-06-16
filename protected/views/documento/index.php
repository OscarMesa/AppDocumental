<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<style type="text/css" href='<?php echo Yii::app()->getBaseUrl(true); ?>/css/file-tree.min.css' rel="stylesheet"></style>
<style type="text/css">
    a {
        color: #7b507b;
    }
    .nav-list li{
        margin-left: 11px !important
    }
    .summary{
         display: block !important;
    }
</style>
<?php
/* @var $this DocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Documentos',
);

$this->menu = array(array('label' => 'Operaciones'));
  if(Yii::app()->user->checkAccess('action_documento_create'))
    $this->menu[] = array('label' => 'Crear Documento', 'icon' => 'pencil', 'url' => array('create'));
  if(Yii::app()->user->checkAccess('action_documento_admin'))  
    $this->menu[] = array('label' => 'Administrador de Documentos', 'icon' => 'eye-open', 'url' => array('admin'));
  if(Yii::app()->user->checkAccess('action_documento_index'))  
    $this->menu[] = array('label' => 'Listar', 'icon' => 'list-alt', 'url' => '#', 'active' => true);
  if(Yii::app()->user->checkAccess('action_indicadores_admin')) 
    $this->menu[] = array('label' => 'Indicadores', 'icon' => 'icon-chevron-right', 'url' => array('../indicadores/admin'));
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


Yii::app()->clientScript->registerScript('lista-archivos', "var ajaxUpdateTimeout;
    var ajaxRequest;
    var date = 'Todos';
    $('#fixed-tree').fileTree({
        data: data
    });
     $('#categorias-select').change(function(){
        ajaxRequest = {type:'category',value_cat:$(this).val(),
                        value_tipo:$('#tipos_doc_select').val(),
                        value: date};
        load_archivos_ajax(ajaxRequest);
    });
    
    $('#tipos_doc_select').change(function(){
        ajaxRequest = {type:'tipo_documento',value_tipo:$(this).val(),
                        value_cat:$('#categorias-select').val(),
                        value: date};
        load_archivos_ajax(ajaxRequest);
    });
    
    $('.mjs-nestedSortable-no-nesting div a').click(function(e) {
        date = $(this).parent().parent().attr('data-name');
        ajaxRequest = {type:'date',value:date,
                        value_tipo:$('#tipos_doc_select').val(),   
                        value_cat:$('#categorias-select').val()    };
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

<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/file-tree.min.js"></script>
<script type="text/javascript">
    <?php
$list = Yii::app()->db->createCommand('SELECT DATE_FORMAT( fecha_creacion, "%Y" ) "year", DATE_FORMAT( fecha_creacion, "%m" ) " month" FROM `documento` GROUP BY DATE_FORMAT( fecha_creacion, "%Y-%m" ) ORDER BY fecha_creacion DESC')->queryAll();
$fechas = array();
$y = -1;
foreach ($list as $value) {
    if (!isset($fechas[$value['year']])) {
        $fechas[$value['year']] = array('id' => 'year-' . $value['year'], 'name' => $value['year'], 'type' => 'dir', 'children' => array());
    }
    $fechas[$value['year']]['children'][] = array('url'=>'', 'id' => 'month-' . $value['year'] . '-' . $value['month'], 'name' => $value['year'] . '-' . $value['month'], 'type' => 'doc');
    // echo '<a href="#" class="filter" type="date" value="' . $value['year'] . '-' . $value['month'] . '">' . $value['year'] . ' | ' . date('M', mktime(0, 0, 0, $value['month'], 1, 2000)) . '</a><br/>';
}
$data = array(array('url'=>'','id' => 'year-all', 'name' => 'Todos', 'type' => 'doc'));
foreach ($fechas as $fecha) {
    $data[] = $fecha;
}
?>  var data = <?php echo json_encode($data); ?>;
    
</script>