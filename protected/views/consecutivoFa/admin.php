<?php
$this->breadcrumbs=array(
	'Consecutivo Fas'=>array('index'),
	'Administrar',
);
?>

<h1>Consecutivos</h1>

<br />
<div align="right">

    <?php 

            $this->widget('bootstrap.widgets.BootButton', array(
                    'label'=>'Nuevo',
                    'type'=>'success', 
                    'size'=>'mini', 
                    'icon' => 'plus white',
                    'htmlOptions'=>array('onclick'=>'$("#myModal").modal()')
            )); 

    ?>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'consecutivo-fa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CODIGO_CONSECUTIVO',
		'FORMATO_IMPRESION',
		'DESCRIPCION',
		'TIPO',
		'LONGITUD',
		'VALOR_CONSECUTIVO',
		/*
		'MASCARA',
		'USA_DESPACHOS',
		'USA_ESQUEMA_CAJAS',
		'VALOR_MAXIMO',
		'NUMERO_COPIAS',
		'ORIGINAL',
		'COPIA1',
		'COPIA2',
		'COPIA3',
		'COPIA4',
		'COPIA5',
		'RESOLUCION',
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
