<?php
$this->breadcrumbs=array(
	'Tipo Documento'=>array('admin'),
	$model2->ID=>array('view','id'=>$model2->ID),
	'Actualizar',
);

?>

<h1>Actualizar Tipo Documento <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>