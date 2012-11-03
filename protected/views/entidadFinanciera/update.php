<?php $this->pageTitle=Yii::app()->name." - ".Yii::t('app','UPDATE')." Entidad Financiera";?>
<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model2->ID),
	"Entidad Financiera");
?>

<h1>Actualizar Entidad Financiera <?php echo $model2->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model2'=>$model2, 'nit'=>$nit,)); ?>