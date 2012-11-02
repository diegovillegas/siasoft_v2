<?php
$this->breadcrumbs=array(
	'Nit',
);

$this->menu=array(
	array('label'=>Yii::t('app','CREATE').' Nit', 'url'=>array('create')),
	array('label'=>Yii::t('app','MANAGE').' Nit', 'url'=>array('admin')),
);
?>

<h1>Nit</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
