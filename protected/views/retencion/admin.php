<?php $this->pageTitle=Yii::app()->name." - Retenciones";?>
<?php
$this->breadcrumbs=array(
	'Retenciones'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Retención', 'url'=>array('index')),
	array('label'=>'Crear Retención', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('retencion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Retenciones</h1>


<div align="right">
    <?php 

		$this->widget('bootstrap.widgets.BootButton', array(
		'label'=>'EXCEL',
		'type'=>'inverse', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'size'=>'mini', // '', 'large', 'small' or 'mini'
		'url' => array('retencion/excel'),
		'icon' => 'download-alt white'
		)); 

	?>
    
     <?php 

    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'PDF',
        'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
	'url' => array('retencion/pdf'),
	'icon' => 'download-alt white white'
        )); 
    ?>
    
<?php 

$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Nuevo',
    'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'mini', // '', 'large', 'small' or 'mini'
	'url' => array('retencion/create'),
	'icon' => 'plus white'
)); 

?>
</div>

<?php  $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
	'id'=>'retencion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'NOMBRE',
		'PORCENTAJE',
		'MONTO_MINIMO',
		//'TIPO',
		//'APLICA_MONTO',
		/*
		'APLICA_SUBTOTAL',
		'APLICA_SUB_DESC',
		'APLICA_IMPUESTO1',
		'APLICA_RUBRO1',
		'APLICA_RUBRO2',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
		*/
		array(
                    'class'=>'bootstrap.widgets.BootButtonColumn',
                    'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>