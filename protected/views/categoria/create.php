<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','CREATE')." Categorias";?>
<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' Categoria', 'url'=>array('index')),
	array('label'=>Yii::t('app','MANAGE').' Categoria', 'url'=>array('admin')),
);
?>

<h1>Crear Categoria</h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>