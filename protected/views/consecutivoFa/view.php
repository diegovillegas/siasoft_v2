<?php
$this->breadcrumbs=array(
	'Consecutivo Fas'=>array('index'),
	$model->CODIGO_CONSECUTIVO,
);
?>

<h1>Ver ConsecutivoFa #<?php echo $model->CODIGO_CONSECUTIVO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CODIGO_CONSECUTIVO',
		'FORMATO_IMPRESION',
		'DESCRIPCION',
		'TIPO',
		'LONGITUD',
		'VALOR_CONSECUTIVO',
		'MASCARA',
		'USA_DESPACHOS',
		'USA_ESQUEMA_CAJAS',
		'VALOR_MAXIMO',
		'NUMERO_COPIAS',
		'ORIGINAL',
		'COPIA1',
		'COPIA2',
		'COPIA3',
		'COPIA4',
		'COPIA5',
		'RESOLUCION',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
