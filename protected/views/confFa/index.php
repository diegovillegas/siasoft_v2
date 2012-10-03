<?php
/* @var $this ConfFaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conf Fas',
);

$this->menu=array(
	array('label'=>'Create ConfFa', 'url'=>array('create')),
	array('label'=>'Manage ConfFa', 'url'=>array('admin')),
);
?>

<h1>Conf Fas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
