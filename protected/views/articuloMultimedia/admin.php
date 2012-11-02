<?php
$this->breadcrumbs=array(
	'Articulo Multimedias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar ArticuloMultimedia', 'url'=>array('index')),
	array('label'=>'Crear ArticuloMultimedia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('articulo-multimedia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Articulo Multimedias</h1>

<p>
Si lo desea, puede entrar en un operador de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de su busqueda para especificar como la comparacion se debe hacer.
</p>

<?php echo CHtml::link('Busqueda Avazada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-multimedia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'ARTICULO',
		'TIPO',
		'UBICACION',
		'NOMBRE',
		'DESCRIPCION',
		/*
		'ORDEN',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
