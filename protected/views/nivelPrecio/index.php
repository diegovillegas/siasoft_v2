<?php
$this->breadcrumbs=array(
	'Nivel Precio',
);

$this->menu=array(
	array('label'=>Yii::t('app','CREATE').' NivelPrecio', 'url'=>array('create')),
	array('label'=>Yii::t('app','MANAGE').' NivelPrecio', 'url'=>array('admin')),
);
?>

<h1>Nivel Precio</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
