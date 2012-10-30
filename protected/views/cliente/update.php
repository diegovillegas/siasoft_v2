<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->CLIENTE=>array('view','id'=>$model->CLIENTE),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->CLIENTE)),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $model->CLIENTE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>