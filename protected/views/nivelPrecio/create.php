<?php
$this->breadcrumbs=array(
	'Tipo de Precio'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List NivelPrecio', 'url'=>array('index')),
	array('label'=>'Manage NivelPrecio', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Precio</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>