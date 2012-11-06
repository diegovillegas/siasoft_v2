<?php
$this->breadcrumbs=array(
	'Facturación'=>array('admin'),
	'Consecutivos'
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
                    'url'=>array('create')
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
                'DESCRIPCION',
		array(
                    'name'=>'FORMATO_IMPRESION',
                    'value'=>'$data->fORMATOIMPRESION->NOMBRE',
                    'filter'=>CHtml::listData(FormatoImpresion::model()->findAllByAttributes(array('MODULO'=>'FACT')), 'ID', 'NOMBRE')
                ),
		'LONGITUD',
		'MASCARA',
                array(
                    'name'=>'TIPO',
                    'value'=>'$data->TIPO == "N" ? "Numérico" : "Alfanumérico"',
                    'filter'=>array('N'=>'Numérico','A'=>'Alfanumérico'),
                ),
		'VALOR_CONSECUTIVO',
		'VALOR_MAXIMO',
		 array(
                        'class'=>'bootstrap.widgets.BootButtonColumn',
                        'htmlOptions'=>array('style'=>'width: 50px'),
                    ),
	),
)); ?>
