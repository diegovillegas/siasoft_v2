<?php
/* @var $this TipoAccidenteController */
/* @var $model TipoAccidente */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Tipos de Accidentes'=>array('admin'),
	$model2->TIPO_ACCIDENTE=>array('view','id'=>$model2->TIPO_ACCIDENTE),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List TipoAccidente', 'url'=>array('index')),
	array('label'=>'Create TipoAccidente', 'url'=>array('create')),
	array('label'=>'View TipoAccidente', 'url'=>array('view', 'id'=>$model2->TIPO_ACCIDENTE)),
	array('label'=>'Manage TipoAccidente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Accidente <?php echo $model2->TIPO_ACCIDENTE; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>