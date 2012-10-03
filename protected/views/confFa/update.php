<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */

$this->breadcrumbs=array(
	'Conf Fas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConfFa', 'url'=>array('index')),
	array('label'=>'Create ConfFa', 'url'=>array('create')),
	array('label'=>'View ConfFa', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage ConfFa', 'url'=>array('admin')),
);
?>

<h1>Update ConfFa <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>