<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Condición de Pago";?>
<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model2->ID),
	"Condición de pago");
?>

<h1>Actualizar Condición de Pago <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>