<?php
$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' Zona', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' Zona', 'url'=>array('admin')),
);
?>

<h1>Crear Zona</h1>

<?php echo $this2->renderPartial('_form', array('model'=>$model2)); ?>