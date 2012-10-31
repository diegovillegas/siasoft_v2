<?php
/* @var $this TipoAusenciaController */
/* @var $model TipoAusencia */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Tipos de Ausencias'=>array('admin'),
	$model->TIPO_AUSENCIA,
);

$this->menu=array(
	array('label'=>'List TipoAusencia', 'url'=>array('index')),
	array('label'=>'Create TipoAusencia', 'url'=>array('create')),
	array('label'=>'Update TipoAusencia', 'url'=>array('update', 'id'=>$model->TIPO_AUSENCIA)),
	array('label'=>'Delete TipoAusencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIPO_AUSENCIA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoAusencia', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Ausencia <?php echo $model->TIPO_AUSENCIA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIPO_AUSENCIA',
		'NOMBRE',
		array(
                    'name'=>'JUSTIFICADA',
                    'value'=>  TipoAusencia::getJustificada($model->JUSTIFICADA),
                ),
            array(
                    'name'=>'PAGO',
                    'value'=>  TipoAusencia::getPago($model->PAGO),
                ),
	),
)); ?>
