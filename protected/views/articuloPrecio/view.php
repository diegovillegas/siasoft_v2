<?php
/* @var $this ArticuloPrecioController */
/* @var $model ArticuloPrecio */

$this->breadcrumbs=array(
	'Articulo Precios'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ArticuloPrecio', 'url'=>array('index')),
	array('label'=>'Create ArticuloPrecio', 'url'=>array('create')),
	array('label'=>'Update ArticuloPrecio', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ArticuloPrecio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticuloPrecio', 'url'=>array('admin')),
);
?>

<h1>View ArticuloPrecio #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ARTICULO',
		'NIVEL_PRECIO',
		'PRECIO',
		'ESQUEMA_TRABAJO',
		'MARGEN_MULTIPLICADOR',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
