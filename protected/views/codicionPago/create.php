<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Condicion de Pagos";?>
<?php
$this->breadcrumbs=array(
	'Condicion de Pagos'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' CodicionPago', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' CodicionPago', 'url'=>array('admin')),
);
?>

<h1>Crear Condicion de Pago</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>