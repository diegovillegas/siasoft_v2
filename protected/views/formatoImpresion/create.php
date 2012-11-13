<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Formato Impresion";?>
<?php
$this->breadcrumbs=array(
	'Formato Impresion'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar FormatoImpresion', 'url'=>array('index')),
	array('label'=>'Administrar FormatoImpresion', 'url'=>array('admin')),
);
?>

<h1>Crear FormatoImpresion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>