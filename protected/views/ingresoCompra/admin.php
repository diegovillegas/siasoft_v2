<script>
function obtenerSeleccion(){
    var idcategoria = $.fn.yiiGridView.getSelection('ingreso-compra-grid');
    $('#check').val(idcategoria);
}

function cargando(){
    $("#cargando").html('<div align="center" style="height: 300px; margin-top: 150px;"><?php echo CHtml::image($ruta);?></div>');
}

function reescribir(){
    $('.close').click();
    $('#alert').remove();
    $('#form-cargado').slideDown('slow');
    $('#boton-cargado').remove();
}
</script>
<?php
/* @var $this IngresoCompraController */
/* @var $model IngresoCompra */

$this->breadcrumbs=array(
	'Ingreso Compras'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'List IngresoCompra', 'url'=>array('index')),
	array('label'=>'Create IngresoCompra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ingreso-compra-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ingreso de Compras</h1>
<br />
<div align="right">
    
    <?php    
        /*Yii::app()->request->cookies['habilitar'] = new CHttpCookie('habilitar', 'si');
        $habilitar = Yii::app()->request->cookies['habilitar']->value;
        $habilitar .= ' -- aqui';
        Yii::app()->request->cookies['habilitar'] = new CHttpCookie('habilitar', $habilitar);
        echo Yii::app()->request->cookies['habilitar']->value;*/
    ?>
    <?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array()); ?>
    <?php echo CHtml::HiddenField('check',''); ?>
    
<?php 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Cancelar',
        'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
        'url' => array('ingresoCompra/create'),
        'icon' => 'remove white',
        'htmlOptions'=>array('onclick'=>'return confirm("¿Está seguro que desea cancelar este(os) ingreso(s)?");'),
    ));
?>
    
<?php 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Aplicar',
        'buttonType'=>'ajaxSubmit',
        'type'=>'info', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
        'icon' => 'share-alt white',
        'url' => array('listar'),
        'ajaxOptions'=>array(
            'type'=>'POST',
            'update'=>'#respuesta',
            //'complete'=>'completado()',
        ),
        'htmlOptions'=>array('onclick'=>'$("#advertencia").modal();')
    ));
?>
    
<?php
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Nuevo',
        'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'mini', // '', 'large', 'small' or 'mini'
            'url' => array('ingresoCompra/create'),
            'icon' => 'plus white',
    )); 
    $this->endWidget(); 
?>
    
</div>
<?php $this->widget('bootstrap.widgets.BootGridView', array(
        'type'=>'striped bordered condensed',
	'id'=>'ingreso-compra-grid',
        'selectableRows'=>2,
        'selectionChanged'=>'obtenerSeleccion',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array('class'=>'CCheckBoxColumn'),
		'INGRESO_COMPRA',
		'PROVEEDOR',
		'FECHA_INGRESO',
		//'TIENE_FACTURA',
                'ESTADO',
                'APLICADO_POR',
		'APLICADO_EL',
		/*
                'RUBRO1',
		'RUBRO2',
		'RUBRO3',
		'RUBRO4',
		'RUBRO5',
		'NOTAS',
		'ESTADO',
		'CANCELADO_POR',
		'CANCELADO_EL',
		'CREADO_POR',
		'CREADO_EL',
		'MODIFICADO_POR',
		'MODIFICADO_EL',
		*/
	),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'advertencia')); ?>
        
<div class="modal-header"><a class="close" data-dismiss="modal">&times;</a></div>
<div id="cargando">
<div class="modal-body">                
                <br>                
                <?php 
                    Yii::app()->user->setFlash('warning', '<h3>Advertencias</h3><p>&nbsp;</p><div id="respuesta">Seleccione Ingresos para aplicar</div>');
                    $this->widget('bootstrap.widgets.BootAlert');       
                ?>
          </div>
	
        <div class="modal-footer">            
            <table>
                <tr>
                    <td><div align="right"><h3>¿Desea Continuar?</h3></div></td>
                    <td>
            <?php 
                $this->widget('bootstrap.widgets.BootButton', array(
                    'label'=>'Continuar',
                    'buttonType'=>'ajaxSubmit',
                    'type'=>'success', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                    'icon' => 'ok-circle white white',
                    'url' => array('aplicar'),
                    'ajaxOptions'=>array(
                        'type'=>'POST',
                        'update'=>'#cargando',                        
                        'beforeSend'=>'cargando()',
                    ),                    
                ));
            ?>

            <?php $this->widget('bootstrap.widgets.BootButton', array(
                'label'=>'Cancelar',
                'url'=>'#',
                'htmlOptions'=>array('data-dismiss'=>'modal'),
            )); ?>
                        </td>
                </tr>
            </table>                      
        </div>
    </div>
 <?php $this->endWidget(); ?>