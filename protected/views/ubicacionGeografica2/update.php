<?php
$this->breadcrumbs=array(
	'Ubicacion Geografica 2'=>array('admin'),
	$model2->ID=>array('view','id'=>$model2->ID),
	'Actualizar',
);

?>

<h1>Actualizar Ubicacion Geografica 2 <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>