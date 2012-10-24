<?php
/* @var $this ArticuloEnsambleController */
/* @var $model ArticuloEnsamble */

$this->breadcrumbs=array(
	'Articulo Ensambles'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List ArticuloEnsamble', 'url'=>array('index')),
	array('label'=>'Create ArticuloEnsamble', 'url'=>array('create')),
	array('label'=>'Update ArticuloEnsamble', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ArticuloEnsamble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticuloEnsamble', 'url'=>array('admin')),
);
?>

<h1>View ArticuloEnsamble #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ARTICULO_PADRE',
		'ARTICULO_HIJO',
		'CANTIDAD',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
