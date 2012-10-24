<?php
/* @var $this ArticuloEnsambleController */
/* @var $model ArticuloEnsamble */

$this->breadcrumbs=array(
	'Articulo Ensambles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticuloEnsamble', 'url'=>array('index')),
	array('label'=>'Create ArticuloEnsamble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('articulo-ensamble-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Ensambles de articulos</h1>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'articulo-ensamble-grid',
	'dataProvider'=>$articulo->searchEnsamble(),
	'filter'=>$articulo,
	'columns'=>array(		
		'ARTICULO',
		'NOMBRE',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
                        'htmlOptions'=>array('style'=>'width: 50px;'),
                        'template' => '{update} {view}'
		),
	),
)); ?>
