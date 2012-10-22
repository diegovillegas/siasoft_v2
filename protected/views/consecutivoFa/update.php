<?php
$this->breadcrumbs=array(
	'Consecutivo Fas'=>array('index'),
	$model->CODIGO_CONSECUTIVO=>array('view','id'=>$model->CODIGO_CONSECUTIVO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar ConsecutivoFa', 'url'=>array('index')),
	array('label'=>'Crear ConsecutivoFa', 'url'=>array('create')),
	array('label'=>'Ver ConsecutivoFa', 'url'=>array('view', 'id'=>$model->CODIGO_CONSECUTIVO)),
	array('label'=>'Administrar ConsecutivoFa', 'url'=>array('admin')),
);
?>

<h1>Actualizar ConsecutivoFa <?php echo $model->CODIGO_CONSECUTIVO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>