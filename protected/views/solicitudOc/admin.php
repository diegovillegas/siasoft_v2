<script>
function completado(){
    $.fn.yiiGridView.update('solicitud-oc-grid');
}

function obtenerSeleccion(){
    var idcategoria = $.fn.yiiGridView.getSelection('solicitud-oc-grid');
    $('#check').val(idcategoria);
}

$(document).ready(inicio)

function inicio(){

}
</script>
<?php
if(!ConfCo::darConf())
     $this->redirect(array('/confCo/create'));
$this->breadcrumbs=array(
	'Solicitudes'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar SolicitudOc', 'url'=>array('index')),
	array('label'=>'Crear SolicitudOc', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('solicitud-oc-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Solicitudes</h1>
<br />
<div id="mensaje"></div>
<div align="right">
    <?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array()); ?>
    <?php echo CHtml::HiddenField('check',''); ?>
    <?php 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Cancelar',
        'buttonType'=>'ajaxSubmit',
        'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
        'url' => array('cancelar'),
        'icon' => 'remove white',
        'ajaxOptions'=>array(
            'type'=>'POST',
            'update'=>'#mensaje',
            'complete'=>'completado()',
        ),
        'htmlOptions'=>array('confirm'=>'¿Está seguro que desea cancelar esta(s) solicitud(es)?', 'id'=>'cancelar'),
    ));
    ?>
    
    <?php 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Autorizar',
        'buttonType'=>'ajaxSubmit',
        'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
        'url' => array('autorizar'),
        'icon' => 'ok white',
        'ajaxOptions'=>array(
            'type'=>'POST',
            'update'=>'#mensaje',
            'complete'=>'completado()',
        ),
        'htmlOptions'=>array('id'=>'autorizar'),
    ));
    ?>
    
    <?php 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Rev Autorización',
        'buttonType'=>'ajaxSubmit',
        'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
        'url' => array('reversar'),
        'icon' => 'arrow-left white',
        'ajaxOptions'=>array(
            'type'=>'POST',
            'update'=>'#mensaje',
            'complete'=>'completado()',
        ),
        'htmlOptions'=>array('id'=>'rever'),
    ));
    ?>
                
<?php 

$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Nuevo',
    'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'mini', // '', 'large', 'small' or 'mini'
	'url' => array('solicitudOc/create'),
	'icon' => 'plus white',
)); 

?>
</div>
<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'solicitud-oc-grid',
        'selectableRows'=>2,
        'selectionChanged'=>'obtenerSeleccion',
        'dataProvider'=>$model->search(),
	'filter'=>$model,
        
	'columns'=>array(
                array('class'=>'CCheckBoxColumn'),
		'SOLICITUD_OC',
		'FECHA_SOLICITUD',
		'FECHA_REQUERIDA',
		'AUTORIZADA_POR',
                'FECHA_AUTORIZADA',
                array(
                    'name'=>'ESTADO',
                    'header'=>'Estado',
                    'value'=>'SolicitudOc::estado($data->ESTADO)',
                    'filter'=>array('P'=>'Planeado','A'=>'Asignado','N'=>'No Asignado', 'C'=>'Cancelado'),
                ),
                //'ESTADO',
		/*
                'FECHA_AUTORIZADA',
		'PRIORIDAD',
		'LINEAS_NO_ASIG',
		'COMENTARIO',
		'CANCELADA_POR',
		'FECHA_CANCELADA',
		'RUBRO1',
		'RUBRO2',
		'RUBRO3',
		'RUBRO4',
		'RUBRO5',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
		*/
		array(
                    'class'=>'bootstrap.widgets.BootButtonColumn',
                    'template'=>'{update}',
		),
                array(
                         'class'=>'CLinkColumn',
			 //'header'=>'Bodegas',
			 'imageUrl'=>Yii::app()->baseUrl.'/images/pdf.png',
			 //'labelExpression'=>'$data->ID',
			 'urlExpression'=>'CController::createUrl("/SolicitudOc/pdf", array("id"=>$data->SOLICITUD_OC))',
			 'htmlOptions'=>array('style'=>'text-align:center;'),
			 'linkHtmlOptions'=>array('style'=>'text-align:center','rel'=>'tooltip', 'data-original-title'=>'PDF', 'target'=>'_blank'),
                ),
	),
)); 
 ?>
 <?php $this->endWidget(); ?>