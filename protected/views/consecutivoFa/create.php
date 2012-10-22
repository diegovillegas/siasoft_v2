<?php
$this->breadcrumbs=array(
	'Consecutivo Fas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar ConsecutivoFa', 'url'=>array('index')),
	array('label'=>'Administrar ConsecutivoFa', 'url'=>array('admin')),
);
?>

<h1>Crear ConsecutivoFa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>