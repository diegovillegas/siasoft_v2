<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */

$this->breadcrumbs=array(
	'Conf Fas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ConfFa', 'url'=>array('index')),
	array('label'=>'Create ConfFa', 'url'=>array('create')),
	array('label'=>'Update ConfFa', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ConfFa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConfFa', 'url'=>array('admin')),
);
?>

<h1>View ConfFa #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'COND_PAGO_CONTADO',
		'BODEGA_DEFECTO',
		'CATEGORIA_CLIENTE',
		'NIVEL_PRECIO',
		'DECIMALES_PRECIO',
		'DESCUENTO_PRECIO',
		'DESCUENTO_AFECTA_IMP',
		'FORMATO_PEDIDO',
		'FORMATO_FACTURA',
		'FORMATO_REMISION',
		'USAR_RUBROS',
		'RUBRO1_NOMBRE',
		'RUBRO2_NOMBRE',
		'RUBRO3_NOMBRE',
		'RUBRO4_NOMBRE',
		'RUBRO5_NOMBRE',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
