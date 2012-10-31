<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Nivel de Precios";?>
<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model2->ID),
	"Nivel de Precios");
?>

<h1>Actualizar Nivel Precio <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>