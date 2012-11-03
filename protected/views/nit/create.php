<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Relación de Nits";?>
<?php
$this->breadcrumbs=array(
	'Nits'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' Nit', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' Nit', 'url'=>array('admin')),
);
?>

<h1>Crear Nit</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>