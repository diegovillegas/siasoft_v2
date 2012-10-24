<?php
/* @var $this ArticuloEnsambleController */
/* @var $model ArticuloEnsamble */

$this->breadcrumbs=array(
	'Articulo Ensambles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticuloEnsamble', 'url'=>array('index')),
	array('label'=>'Manage ArticuloEnsamble', 'url'=>array('admin')),
);
?>

<h1>Create ArticuloEnsamble</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>