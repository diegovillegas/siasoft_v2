<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */

$this->breadcrumbs=array(
	'Conf Fas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConfFa', 'url'=>array('index')),
	array('label'=>'Manage ConfFa', 'url'=>array('admin')),
);
?>

<h1>Create ConfFa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>