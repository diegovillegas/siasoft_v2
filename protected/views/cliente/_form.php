<script>
    $(document).ready(inicio);
    
    function inicio(){
        $( ".escritoNit" ).autocomplete({
            change: function() { 
                $.getJSON(
                    '<?php echo $this->createUrl('proveedor/CargarNit'); ?>&buscar='+$(this).attr('value'),
                    function(data)
                    {
                        $('#Nit2').val(data.NOMBRE);
                    }
               )
            }
        });
        $( ".escritoImpuesto" ).autocomplete({
            change: function() { 
                $.getJSON(
                    '<?php echo $this->createUrl('impuesto/cargarimpuesto'); ?>&id='+$(this).attr('value'),
                    function(data)
                    {
                        $('#IMPUESTO').val(data.NOMBRE);
                    }
               )
            }
        });
        $( ".escritoRegimen" ).autocomplete({
            change: function() { 
                $.getJSON(
                    '<?php echo $this->createUrl('regimenTributario/Cargarregimen'); ?>&id='+$(this).attr('value'),
                    function(data)
                    {
                        $('#REGIMEN').val(data.DESCRIPCION);
                    }
               )
            }
        });
    }
    
    function updateImpuesto(grid_id){
        var id=$.fn.yiiGridView.getSelection(grid_id);
        
        $.getJSON(
            '<?php echo $this->createUrl('impuesto/cargarimpuesto'); ?>&id='+id,
            function(data){
                $('#Cliente_IMPUESTO').val(data.ID);
                $('#IMPUESTO').val(data.NOMBRE);

            }
        );
    }
    
    function cargaNitGrilla(grid_id){
    var buscar = $.fn.yiiGridView.getSelection(grid_id);
    
    $.getJSON(
        '<?php echo $this->createUrl('proveedor/CargarNit'); ?>&buscar='+buscar,
        function(data)
        {
            $('#Cliente_NIT').val(data.ID);
            $('#Nit2').val(data.NOMBRE);
        }
    )
}
</script>
<div class="form">

<?php  $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>true,
        'clientOptions'=>array(
              'validateOnSubmit'=>true,
        ),
        'type'=>'horizontal',
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <table>
                <tr>
                    <td >
                        <div align="left" style="width: 120px;">
                            <?php echo $form->textFieldRow($model,'CLIENTE',array('maxlength'=>20,'disabled'=>$model->isNewRecord ? false : true));?>
                        </div>
                    </td>
                    <td>
                        <div align="left" style="width: 228px;">
                            <?php echo $form->textFieldRow($model,'NOMBRE',array('maxlength'=>60)); ?>
                        </div>
                    </td>
                </tr>

       </table>  

        <?php
                $calendario = $this->widget('zii.widgets.jui.CJuiDatePicker',
                         array(
                              'model'=>$model,
                              'attribute'=>'FECHA_INGRESO',
                              'language'=>'es',
                              'options'=>array(
                                     'changeMonth'=>true,
                                     'changeYear'=>true,
                                     'dateFormat'=>'yy-mm-dd',
                                     'constrainInput'=>'false',
                                     'showAnim'=>'fadeIn',
                                     'showOn'=>'button',
                                     'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',
                                     'buttonImageOnly'=>true,
                              ),
                              'htmlOptions'=>array('style'=>'width:80px;vertical-align:top'),
                ),true);
                
                $autocompletarNit = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model'=>$model,
                    'attribute'=>'NIT',
                    'source'=>$this->createUrl('proveedor/autocompletar'),
                    'htmlOptions'=>array(
                        'size'=>'12',
                        'class'=>'escritoNit'
                    ),
                ), true);
                $autocompletarImpuesto = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model'=>$model,
                    'attribute'=>'IMPUESTO',
                    'source'=>$this->createUrl('autocompletar',array('impuesto'=>1)),
                    'htmlOptions'=>array(
                        'size'=>12,
                        'class'=>'escritoImpuesto',
                        'maxlength'=>4
                    ),
                ), true);
                $autocompletarRegimen = $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model'=>$model,
                    'attribute'=>'REGIMEN',
                    'source'=>$this->createUrl('autocompletar',array('regimen'=>1)),
                    'htmlOptions'=>array(
                        'size'=>12,
                        'class'=>'escritoRegimen',
                        'maxlength'=>12
                    ),
                ), true);
                
                $botonNit = $this->widget('bootstrap.widgets.BootButton', array(
                          'type'=>'info',
                          'size'=>'mini',
                          'url'=>'#nit',
                          'icon'=>'search',
                          'htmlOptions'=>array('data-toggle'=>'modal'),
                    ), true);
                $botonImpuesto = $this->widget('bootstrap.widgets.BootButton', array(
                          'type'=>'info',
                          'size'=>'mini',
                          'url'=>'#impuesto',
                          'icon'=>'search',
                          'htmlOptions'=>array('data-toggle'=>'modal'),
                    ), true);
                $botonRegimen = $this->widget('bootstrap.widgets.BootButton', array(
                          'type'=>'info',
                          'size'=>'mini',
                          'url'=>'#regimen',
                          'icon'=>'search',
                          'htmlOptions'=>array('data-toggle'=>'modal'),
                    ), true);
                
                $this->widget('bootstrap.widgets.BootTabbable', array(
                            'type'=>'tabs',
                            'tabs'=>array(
                                array(
                                    'label'=>'General',
                                    'content'=>'
                                            <table>
                                                <tr>
                                                    <td>'
                                                        .$form->labelEx($model,'FECHA_INGRESO',array('class'=>'control-label'))
                                                        .'<div class="controls">'
                                                            .$calendario
                                                            .'<br>'
                                                            .$form->error($model,'FECHA_INGRESO')
                                                        .'</div>'
                                                        .$form->textFieldRow($model,'ALIAS',array('maxlength'=>64))
                                                        .$form->textFieldRow($model,'CONTACTO',array('maxlength'=>64))
                                                        .$form->textFieldRow($model,'CARGO',array('maxlength'=>32))
                                                        .'<table>
                                                            <tr>
                                                                <td width="50px;">'
                                                                    .$form->labelEx($model,'NIT',array('class'=>'control-label'))
                                                                   .' <div class="controls">'.$autocompletarNit.'</div>
                                                                </td>      
                                                                <td>'.CHtml::textField('Nit2','', array('readonly' => true, 'size'=>25)).'</td>'
                                                                .'<td width="10px;">'
                                                                    .$botonNit
                                                               .'</td>
                                                           </tr>
                                                      </table>
                                                      <table>
                                                            <tr>
                                                                <td width="50px;">'.$form->textFieldRow($model,'TELEFONO1', array('maxlength'=>16)).'</td>      
                                                                <td>'.$form->textField($model,'TELEFONO2', array('maxlength'=>16)).'</td>
                                                           </tr>
                                                      </table>'
                                                      .$form->textFieldRow($model,'FAX',array('maxlength'=>16))
                                                      .$form->dropDownListRow($model,'CATEGORIA',CHtml::listData(Categoria::model()->findAllByAttributes(array('TIPO'=>'C','ACTIVO'=>'S')),'ID','DESCRIPCION'),array('empty'=>'Seleccione'))
                                                      .'<table>
                                                                <tr>
                                                                    <td width="50px;">'
                                                                        .$form->labelEx($model,'IMPUESTO',array('class'=>'control-label'))
                                                                       .' <div class="controls">'.$autocompletarImpuesto.'</div>
                                                                    </td>      
                                                                    <td>'.CHtml::textField('IMPUESTO','', array('readonly' => true, 'size'=>25)).'</td>'
                                                                    .'<td width="10px;">'
                                                                        .$botonImpuesto
                                                                   .'</td>
                                                               </tr>
                                                       </table>
                                                       <table>
                                                                <tr>
                                                                    <td width="50px;">'
                                                                        .$form->labelEx($model,'REGIMEN',array('class'=>'control-label'))
                                                                       .' <div class="controls">'.$autocompletarRegimen.'</div>
                                                                    </td>      
                                                                    <td>'.CHtml::textField('REGIMEN','', array('readonly' => true, 'size'=>25)).'</td>'
                                                                    .'<td width="10px;">'
                                                                        .$botonRegimen
                                                                   .'</td>
                                                               </tr>
                                                     </table>
                                                  </td>
                                                  <td>
                                                        <fieldset style="width: 315px; height: 140px; ">
                                                            <legend ><font face="arial" size=3 >Estado</font></legend>'
                                                            
                                                        .'<br><br></fieldset>'
                                                    .'</td>
                                                </tr>
                                            </table>
                                        '
                                    ,   
                                    'active'=>true
                                ),
                                array(
                                    'label'=>'Impresión',
                                    'content'=>
                                        '',
                               ),
                            ),
                ));
            ?>
	</div>    
	<?php echo $form->hiddenField($model,'ACTIVO',array('value'=>'S')); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_PRECIO'); ?>
		<?php echo $form->textField($model,'TIPO_PRECIO',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'TIPO_PRECIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONDICION_PAGO'); ?>
		<?php echo $form->textField($model,'CONDICION_PAGO',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'CONDICION_PAGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAIS'); ?>
		<?php echo $form->textField($model,'PAIS',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'PAIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UBICACION_GEOGRAFICA1'); ?>
		<?php echo $form->textField($model,'UBICACION_GEOGRAFICA1',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'UBICACION_GEOGRAFICA1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UBICACION_GEOGRAFICA2'); ?>
		<?php echo $form->textField($model,'UBICACION_GEOGRAFICA2',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'UBICACION_GEOGRAFICA2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZONA'); ?>
		<?php echo $form->textField($model,'ZONA'); ?>
		<?php echo $form->error($model,'ZONA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIUDAD'); ?>
		<?php echo $form->textField($model,'CIUDAD',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'CIUDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INTERES_CORRIENTE'); ?>
		<?php echo $form->textField($model,'INTERES_CORRIENTE',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'INTERES_CORRIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INTERES_MORA'); ?>
		<?php echo $form->textField($model,'INTERES_MORA',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'INTERES_MORA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCUENTO'); ?>
		<?php echo $form->textField($model,'DESCUENTO',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'DESCUENTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LIMITE_CREDITO'); ?>
		<?php echo $form->textField($model,'LIMITE_CREDITO',array('size'=>28,'maxlength'=>28)); ?>
		<?php echo $form->error($model,'LIMITE_CREDITO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SITIO_WEB'); ?>
		<?php echo $form->textField($model,'SITIO_WEB',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'SITIO_WEB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION_COBRO'); ?>
		<?php echo $form->textField($model,'DIRECCION_COBRO',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'DIRECCION_COBRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION_EMBARQUE'); ?>
		<?php echo $form->textField($model,'DIRECCION_EMBARQUE',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'DIRECCION_EMBARQUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO1_FA'); ?>
		<?php echo $form->textField($model,'RUBRO1_FA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO1_FA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO2_FA'); ?>
		<?php echo $form->textField($model,'RUBRO2_FA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO2_FA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO3_FA'); ?>
		<?php echo $form->textField($model,'RUBRO3_FA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO3_FA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO4_FA'); ?>
		<?php echo $form->textField($model,'RUBRO4_FA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO4_FA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO5_FA'); ?>
		<?php echo $form->textField($model,'RUBRO5_FA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO5_FA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO1_CC'); ?>
		<?php echo $form->textField($model,'RUBRO1_CC',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO1_CC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO2_CC'); ?>
		<?php echo $form->textField($model,'RUBRO2_CC',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO2_CC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO3_CC'); ?>
		<?php echo $form->textField($model,'RUBRO3_CC',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO3_CC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO4_CC'); ?>
		<?php echo $form->textField($model,'RUBRO4_CC',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO4_CC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO5_CC'); ?>
		<?php echo $form->textField($model,'RUBRO5_CC',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'RUBRO5_CC'); ?>
	</div>


	<div class="row buttons" align="center">
		<?php
                     $this->widget('bootstrap.widgets.BootButton', array(
                               'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
                               'buttonType'=>'submit',
                               'type'=>'primary',
                               'icon'=>'ok-circle white', 
                            )
                    );
             ?>
              <?php
                    $this->widget('bootstrap.widgets.BootButton', array(
                                   'label'=>'Cancelar',
                                   'type'=>'action',
                                   'icon'=>'remove ', 
                                   'url'=>array('admin'),
                                )
                   );
             ?>
	</div>

<?php $this->endWidget(); ?>

<?php 
    $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'nit')); ?>
 
	<div class="modal-body">
                <a class="close" data-dismiss="modal">&times;</a>
                <br>
          <?php 
            $dataprovider = $nit->search();
            $dataprovider->pagination = array('pageSize'=>5);
            
            $this->widget('bootstrap.widgets.BootGridView', array(
            'type'=>'striped bordered condensed',
            'id'=>'articulo-grid',
            'template'=>"{items} {pager}",
            'dataProvider'=>$dataprovider,
            'selectionChanged'=>'cargaNitGrilla',
            'filter'=>$nit,
            'columns'=>array(
                array(  'name'=>'ID',
                        'header'=>'Nit',
                        'htmlOptions'=>array('data-dismiss'=>'modal'),
                        'type'=>'raw',
                        'value'=>'CHtml::link($data->ID,"#")'
                    ),
                    'TIIPO_DOCUMENTO',
                    'RAZON_SOCIAL',
                    array(
                            'class'=>'bootstrap.widgets.BootButtonColumn',
                            'htmlOptions'=>array('style'=>'width: 50px'),
                            'template'=>'',
                    ),
            ),
    ));
      ?>
	</div>
        <div class="modal-footer">

            <?php $this->widget('bootstrap.widgets.BootButton', array(
                'label'=>'Cerrar',
                'url'=>'#',
                'htmlOptions'=>array('data-dismiss'=>'modal'),
            )); ?>
        </div>
 
<?php 
    $this->endWidget(); 

    $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'impuesto')); ?>
 
	<div class="modal-body">
                <a class="close" data-dismiss="modal">&times;</a>
                <br>
		<?php 
                    
                    $funcion = 'updateImpuesto';
                    $id = 'impuesto-grid';
                    echo $this->renderPartial('/articulo/impuesto', array('impuesto'=>$impuesto,'funcion'=>$funcion,'id'=>$id));
                ?>
	</div>
        <div class="modal-footer">

            <?php $this->widget('bootstrap.widgets.BootButton', array(
                'label'=>'Cerrar',
                'url'=>'#',
                'htmlOptions'=>array('data-dismiss'=>'modal'),
            )); ?>
        </div>
 
<?php $this->endWidget(); ?>

</div><!-- form -->