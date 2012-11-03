<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Configuración";?>
<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */

$this->breadcrumbs=array(
	'Facturación'=>array('update'),	
	'Configuración',
);
?>

<h1>Configuración de Facturación</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'condicion'=>$condicion, 'categoria'=>$categoria, 'bodega'=>$bodega)); ?>