<?php
$this->breadcrumbs=array(
	'Departamentos',
);

$this->menu=array(
	array('label'=>Yii::t('app','CREATE').' Departamento', 'url'=>array('create')),
	array('label'=>Yii::t('app','MANAGE').' Departamento', 'url'=>array('admin')),
);
?>

<h1>Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
