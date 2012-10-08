<script>
    $(document).ready(function(){
        inicio();
    });
    
    function inicio(){
        $( ".escritoCond" ).autocomplete({
        change: function(e) { 
            $.getJSON(
                '<?php echo $this->createUrl('CargarCond'); ?>&buscar='+$(this).attr('value'),
                function(data)
                {
                    $('#ConfFa_COND_PAGO_CONTADO').val(data.ID);
                    $('#Condicion2').val(data.NOMBRE);
                }
            )
            }
        });
        
        $( ".escritoBod" ).autocomplete({
        change: function(e) { 
            $.getJSON(
                '<?php echo $this->createUrl('CargarBod'); ?>&buscar='+$(this).attr('value'),
                function(data)
                {
                    $('#ConfFa_BODEGA_DEFECTO').val(data.ID);
                    $('#Bodega2').val(data.NOMBRE);
                }
            )
            }
        });
        
        $( ".escritoCat" ).autocomplete({
        change: function(e) { 
            $.getJSON(
                '<?php echo $this->createUrl('CargarCat'); ?>&buscar='+$(this).attr('value'),
                function(data)
                {
                    $('#ConfFa_CATEGORIA_CLIENTE').val(data.ID);
                    $('#Categoria2').val(data.NOMBRE);
                }
            )
            }
        });
    }
</script>
<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'conf-fa-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <?php
    $autocompletarCond = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model'=>$model,
        'attribute'=>'COND_PAGO_CONTADO',
        'source'=>$this->createUrl('autocompletar', array('parametro'=>'CON')),
        'htmlOptions'=>array(
            'size'=>'12',
            'class'=>'escritoCond'
        ),
    ), true);
    ?>
    
    <?php
    $autocompletarBod = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model'=>$model,
        'attribute'=>'BODEGA_DEFECTO',
        'source'=>$this->createUrl('autocompletar', array('parametro'=>'BOD')),
        'htmlOptions'=>array(
            'size'=>'12',
            'class'=>'escritoBod'
        ),
    ), true);
    ?>
    
    <?php
    $autocompletarCat = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model'=>$model,
        'attribute'=>'CATEGORIA_CLIENTE',
        'source'=>$this->createUrl('autocompletar', array('parametro'=>'CAT')),
        'htmlOptions'=>array(
            'size'=>'12',
            'class'=>'escritoCat'
        ),
    ), true);
    ?>
    
    <?php $modal = $this->widget('bootstrap.widgets.BootButton', array(
                          'type'=>'info',
                          'size'=>'mini',
                          'url'=>'#nit',
                          'icon'=>'search',
                          'htmlOptions'=>array('data-toggle'=>'modal'),
                    ), true); ?>
	<?php echo $form->errorSummary($model); ?>
    
        <?php $this->widget('bootstrap.widgets.BootTabbable', array(
        'type'=>'tabs', // 'tabs' or 'pills'
        'tabs'=>array(

            array('label'=>'General', 'content'=>'<table><tr><td width="30%">
                <div class="control-group "><label for="ConfFa_COND_PAGO_CONTADO" class="control-label">Condicion de pago por defecto</label><div class="controls">'.$autocompletarCond.'</div></div>'      
                .'</td><td width="10px;">'
                .$modal
                .'</td><td>'
                .CHtml::textField('Condicion2','', array('readonly' => true, 'size'=>40))
                .'</td></tr>
                <tr><td width="30%">
                <div class="control-group "><label for="ConfFa_BODEGA_DEFECTO" class="control-label">Bodega por defecto</label><div class="controls">'.$autocompletarBod.'</div></div>'      
                .'</td><td width="10px;">'
                .$modal
                .'</td><td>'
                .CHtml::textField('Bodega2','', array('readonly' => true, 'size'=>40))
                .'</td></tr>
                <tr><td width="30%">
                <div class="control-group "><label for="ConfFa_CATEGORIA_CLIENTE" class="control-label">Categoria cliente proveedor por defecto</label><div class="controls">'.$autocompletarCat.'</div></div>'      
                .'</td><td width="10px;">'
                .$modal
                .'</td><td>'
                .CHtml::textField('Categoria2','', array('readonly' => true, 'size'=>40))
                .'</td></tr></table>'
                .$form->dropDownListRow($model,'NIVEL_PRECIO', CHtml::listData(NivelPrecio::model()->findAll('ACTIVO = "S"'),'ID','DESCRIPCION'),array('empty'=>'Seleccione...'))
                .$form->textFieldRow($model,'DECIMALES_PRECIO')
                .$form->radioButtonListInlineRow($model, 'DESCUENTO_PRECIO', array('Precio unitario', 'Total de la linea'))
                .$form->radioButtonListInlineRow($model,'DESCUENTO_AFECTA_IMP',array('Lineas', 'Ambos', 'Total', 'Ninguno')), 'active'=>true),

            array('label'=>'Impresión', 'content'=>
                $form->textFieldRow($model,'FORMATO_PEDIDO')
                .$form->textFieldRow($model,'FORMATO_FACTURA')
                .$form->textFieldRow($model,'FORMATO_REMISION')),


            array('label'=>'Textos', 'content'=>
                 $form->textFieldRow($model,'USAR_RUBROS',array('size'=>1,'maxlength'=>1))
                .$form->textFieldRow($model,'RUBRO1_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO2_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO3_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO4_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO5_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textAreaRow($model,'OBSERVACIONES',array('rows'=>6, 'cols'=>50))                
                ),
        ),
    )); ?>

	<div align="center">
            <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model->isNewRecord ? 'Crear' : 'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small',	'url' => array('confCo/admin'), 'icon' => 'remove'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->