<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Dependencia";?>
<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' Departamento', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' Departamento', 'url'=>array('admin')),
);
?>

<h1>Crear Departamento</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>