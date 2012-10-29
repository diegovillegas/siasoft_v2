<?php
/* @var $this DiaController */
/* @var $model Dia */

$this->breadcrumbs=array(
	'Dias'=>array('index'),
	$model->DIA,
);

$this->menu=array(
	array('label'=>'List Dia', 'url'=>array('index')),
	array('label'=>'Create Dia', 'url'=>array('create')),
	array('label'=>'Update Dia', 'url'=>array('update', 'id'=>$model->DIA)),
	array('label'=>'Delete Dia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DIA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dia', 'url'=>array('admin')),
);
?>

<h1>View Dia #<?php echo $model->DIA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DIA',
		'NOMBRE',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
	),
)); ?>
