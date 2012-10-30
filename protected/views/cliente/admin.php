<?php
$this->breadcrumbs=array(
	'Facturación'=>array('admin'),
	'Clientes'=>array('admin'),
);
?>

<h1>Clientes</h1>
<br>
<div align="right">

    <?php 

        $this->widget('bootstrap.widgets.BootButton', array(
            'label'=>'Nuevo',
            'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size'=>'mini', // '', 'large', 'small' or 'mini'
            'icon' => 'plus white',
            'url'=>array('create'),
        )); 

    ?>
</div>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CLIENTE',
		'REGIMEN',
		'CATEGORIA',
		'IMPUESTO',
		'NIT',
		'TIPO_PRECIO',
		/*
		'CONDICION_PAGO',
		'PAIS',
		'UBICACION_GEOGRAFICA1',
		'UBICACION_GEOGRAFICA2',
		'ZONA',
		'CIUDAD',
		'NOMBRE',
		'FECHA_INGRESO',
		'ALIAS',
		'CONTACTO',
		'CARGO',
		'TELEFONO1',
		'TELEFONO2',
		'FAX',
		'INTERES_CORRIENTE',
		'INTERES_MORA',
		'DESCUENTO',
		'LIMITE_CREDITO',
		'EMAIL',
		'SITIO_WEB',
		'DIRECCION_COBRO',
		'DIRECCION_EMBARQUE',
		'RUBRO1_FA',
		'RUBRO2_FA',
		'RUBRO3_FA',
		'RUBRO4_FA',
		'RUBRO5_FA',
		'RUBRO1_CC',
		'RUBRO2_CC',
		'RUBRO3_CC',
		'RUBRO4_CC',
		'RUBRO5_CC',
		'ACTIVO',
		'CREADO_POR',
		'CREADO_EL',
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
		*/
		 array(
                      'class'=>'bootstrap.widgets.BootButtonColumn',
                 ),
	),
)); ?>
