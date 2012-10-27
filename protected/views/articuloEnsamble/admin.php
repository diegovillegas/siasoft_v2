<script>
    function obtenerSeleccion(){
        var idcategoria = $.fn.yiiGridView.getSelection('articulo-ensamble-grid');
        $('#check').val(idcategoria);
    }
</script>
<?php
$this->breadcrumbs=array(
	'Articulo Ensambles'=>array('index'),
	'Administrar',
);

?>

<h1>Ensambles de articulos</h1>
<?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array()); ?>
    <?php echo CHtml::HiddenField('check',''); ?>
<div align="right">
    <?php
        $this->widget('bootstrap.widgets.BootButton', array(
            'label'=>'Ver detalle',
            'buttonType'=>'ajaxSubmit',
            'url'=>array('detalle'),
                'ajaxOptions'=>array(
                'type'=>'POST',
                'update'=>'#ver-detalle',
                ),
            'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size'=>'mini', // '', 'large', 'small' or 'mini'
            'icon' => 'search',
        ));
    ?>
</div>
<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'articulo-ensamble-grid',
        'selectionChanged'=>'obtenerSeleccion',
	'dataProvider'=>$articulo->searchEnsamble(),
	'filter'=>$articulo,
	'columns'=>array(
                array('class'=>'CCheckBoxColumn'),
		'ARTICULO',
		'NOMBRE',             
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
                        'template' => '{update}'
		),
	),
)); ?>
<?php $this->endWidget(); ?>