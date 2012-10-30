<?php
$this->breadcrumbs=array(
	'Articulo Precios'=>array('admin'),
);
?>

<h1>Update ArticuloPrecio <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'precios'=>$precios, 'articulo'=>$articulo)); ?>