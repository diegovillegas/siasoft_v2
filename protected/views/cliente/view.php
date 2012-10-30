<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->CLIENTE,
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->CLIENTE)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CLIENTE),'confirm'=>'Esta seguro que desea eliminar?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Ver Cliente #<?php echo $model->CLIENTE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CLIENTE',
		'REGIMEN',
		'CATEGORIA',
		'IMPUESTO',
		'NIT',
		'TIPO_PRECIO',
		'CONDICION_PAGO',
		'PAIS',
		'UBICACION_GEOGRAFICA1',
		'UBICACION_GEOGRAFICA2',
		'ZONA',
		'CIUDAD',
		'NOMBRE',
		'FECHA_INGRESO',
		'ALIAS',
		'CONTACTO',
		'CARGO',
		'TELEFONO1',
		'TELEFONO2',
		'FAX',
		'INTERES_CORRIENTE',
		'INTERES_MORA',
		'DESCUENTO',
		'LIMITE_CREDITO',
		'EMAIL',
		'SITIO_WEB',
		'DIRECCION_COBRO',
		'DIRECCION_EMBARQUE',
		'RUBRO1_FA',
		'RUBRO2_FA',
		'RUBRO3_FA',
		'RUBRO4_FA',
		'RUBRO5_FA',
		'RUBRO1_CC',
		'RUBRO2_CC',
		'RUBRO3_CC',
		'RUBRO4_CC',
		'RUBRO5_CC',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
