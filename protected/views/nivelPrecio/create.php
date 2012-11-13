<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Nivel de Precios";?>
<?php
$this->breadcrumbs=array(
	'Tipo de Precio'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' NivelPrecio', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' NivelPrecio', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Precio</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>