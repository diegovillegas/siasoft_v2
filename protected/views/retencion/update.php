<?php
$this->breadcrumbs=array(
        'Sistema'=>array('update', 'id'=>$model->ID),
	"Retenciones");
?>

<h1>Actualizar Retencion <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>