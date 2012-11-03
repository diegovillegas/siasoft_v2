<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Días Feriados";?>
<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model2->ID),
	"Días Feriados");
?>

<h1>Actualizar Dia Feriado <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>