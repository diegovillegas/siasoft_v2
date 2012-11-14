<?php $this->pageTitle=Yii::app()->name." - Categorías";?>

<?php
$this->breadcrumbs=array(
	'Categorías'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>Yii::t('app','LIST').' Categoría', 'url'=>array('index')),
	array('label'=>Yii::t('app','CREATE').' Categoría', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('categoria-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Categorías</h1>


<div align="right">
    <?php 

$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'EXCEL',
    'type'=>'inverse', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'mini', // '', 'large', 'small' or 'mini'
	'url' => array('categoria/excel'),
	'icon' => 'download-alt white'
)); 

?>
    
    <?php 

$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'PDF',
    'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'mini', // '', 'large', 'small' or 'mini'
	'url' => array('categoria/pdf'),
	'icon' => 'download-alt white'
)); 

?>
    
<?php 

$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Nuevo',
    'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'mini', // '', 'large', 'small' or 'mini'
	'icon' => 'plus white',
	'url'=>'#myModal',
	'htmlOptions'=>array('data-toggle'=>'modal')
)); 

?>
</div>
<?php $this->widget('bootstrap.widgets.BootGridView', array(
       'type'=>'striped bordered condensed',
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID',
		'DESCRIPCION',
		array(
                        'name'=>'TIPO',
                        'header'=>'Tipo',
                        'value'=>'Categoria::tipo($data->TIPO)',
                        'filter'=>array('C'=>'Cliente','P'=>'Proveedor'),
                    ),
		//'ACTIVO',
		//'CREADO_POR',
		//'CREADO_EL',
		/*
		'ACTUALIZADO_POR',
		'ACTUALIZADO_EL',
		*/
		array(
                    'class'=>'bootstrap.widgets.BootButtonColumn',
                    'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Crear Categoría</h3>
    <p class="note"><?php echo Yii::t('app','FIELDS_WITH'); ?><span class="required"> * </span><?php echo Yii::t('app','ARE_REQUIRED'); ?>.</p>
</div>
    <?php echo $this->renderPartial('_form', array('model2'=>$model2)); ?>
<?php $this->endWidget(); ?>