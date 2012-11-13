<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Impuestos";?>
<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model2->ID),
	"Impuestos");
?>

<h1>Actualizar Impuesto <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>