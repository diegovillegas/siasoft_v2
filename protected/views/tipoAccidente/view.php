<?php
/* @var $this TipoAccidenteController */
/* @var $model TipoAccidente */

$this->breadcrumbs=array(
     'Recursos Humanos' => array('admin'),
	'Tipos de Accidentes'=>array('admin'),
	$model->TIPO_ACCIDENTE,
);

$this->menu=array(
	array('label'=>'List TipoAccidente', 'url'=>array('index')),
	array('label'=>'Create TipoAccidente', 'url'=>array('create')),
	array('label'=>'Update TipoAccidente', 'url'=>array('update', 'id'=>$model->TIPO_ACCIDENTE)),
	array('label'=>'Delete TipoAccidente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIPO_ACCIDENTE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoAccidente', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Accidente <?php echo $model->TIPO_ACCIDENTE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIPO_ACCIDENTE',
		'NOMBRE',
	),
)); ?>
