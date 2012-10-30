<?php
$this->breadcrumbs=array(
	'Precios de Articulos'=>array('admin'),
	'Administrar',
);
?>

<h1>Precios de Articulos</h1>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
	'id'=>'articulo-precio-grid',
        'type'=>'striped bordered condensed',
	'dataProvider'=>$articulo->searchPrecio(),
	'filter'=>$articulo,
	'columns'=>array(
		'ARTICULO',
		'NOMBRE', 
                'PRECIO_BASE',
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
                        'template' => '{update}'
		),
	),
)); ?>
