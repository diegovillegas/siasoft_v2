<?php
/* @var $this TipoAusenciaController */
/* @var $model TipoAusencia */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Tipos de Ausencias'=>array('admin'),
	$model2->TIPO_AUSENCIA=>array('view','id'=>$model2->TIPO_AUSENCIA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List TipoAusencia', 'url'=>array('index')),
	array('label'=>'Create TipoAusencia', 'url'=>array('create')),
	array('label'=>'View TipoAusencia', 'url'=>array('view', 'id'=>$model2->TIPO_AUSENCIA)),
	array('label'=>'Manage TipoAusencia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Ausencia <?php echo $model2->TIPO_AUSENCIA; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>