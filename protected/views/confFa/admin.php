<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */

$this->breadcrumbs=array(
	'Conf Fas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ConfFa', 'url'=>array('index')),
	array('label'=>'Create ConfFa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('conf-fa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Conf Fas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conf-fa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'COND_PAGO_CONTADO',
		'BODEGA_DEFECTO',
		'CATEGORIA_CLIENTE',
		'NIVEL_PRECIO',
		'DECIMALES_PRECIO',
		/*
		'DESCUENTO_PRECIO',
		'DESCUENTO_AFECTA_IMP',
		'FORMATO_PEDIDO',
		'FORMATO_FACTURA',
		'FORMATO_REMISION',
		'USAR_RUBROS',
		'RUBRO1_NOMBRE',
		'RUBRO2_NOMBRE',
		'RUBRO3_NOMBRE',
		'RUBRO4_NOMBRE',
		'RUBRO5_NOMBRE',
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
