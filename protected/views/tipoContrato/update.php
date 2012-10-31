<?php
/* @var $this TipoContratoController */
/* @var $model TipoContrato */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Tipos de Contrato'=>array('admin'),
	$model2->TIPO_CONTRATO=>array('view','id'=>$model2->TIPO_CONTRATO),
	'Actulaizar',
);

$this->menu=array(
	array('label'=>'List TipoContrato', 'url'=>array('index')),
	array('label'=>'Create TipoContrato', 'url'=>array('create')),
	array('label'=>'View TipoContrato', 'url'=>array('view', 'id'=>$model2->TIPO_CONTRATO)),
	array('label'=>'Manage TipoContrato', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Contrato <?php echo $model2->TIPO_CONTRATO; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>