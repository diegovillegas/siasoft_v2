<script>
    $(document).ready(function(){
        inicio();
    });
    
    function inicio(){
        
        $(".emergente").live("click", function (e) {
            //Obtenemos el numero del campo
            contador = $(this).attr('name');
            $('#oculto').val(contador);
	}); 
        
        var id = '<?php echo $_GET['id']; ?>';
        $('#ArticuloEnsamble_ARTICULO_PADRE').val(id);
        $.getJSON('<?php echo $this->createUrl('cargaArticulo')?>&id='+id,
            function(data){               
                
            $('#Articulo').val(data.DESCRIPCION);                    
           
        });
        
        var nombreClase = "Nuevo";
        var nombreDescripcion;
        var nombreUnidad;
        var contador;
        
        $(".tonces").live("change", function (e) {

            //Obtenemos el numero del campo
            contador = $(this).attr('id').split('_')[1];
            nombreDescripcion = nombreClase + '_' + contador + '_' + 'DESCRIPCION';
            nombreUnidad = nombreClase + '_' + contador + '_' + 'UNIDAD';
            
            $.getJSON(
            '<?php echo $this->createUrl('CargaArticulo'); ?>&id='+$(this).attr('value'),
            
		  function(data)
                  {
                        $('select[id$=' + nombreUnidad + '] > option').remove();
                        $('#' + nombreDescripcion).val(data.DESCRIPCION);
                        
                        if(data.UNIDAD){
                             $(data.UNIDAD).each(function()
                             {
                                 var option = $('<option />');
                                 option.attr('value', this.ID).text(this.NOMBRE);
                                 if (this.ID == data.ALMACEN)
                                     option.attr("selected",true);
                                 $('#' + nombreUnidad).append(option);
                             });
                             }
                         else{
                              $('select[id$=' + nombreUnidad + '] > option').remove();
                         }
		  });
            
        });
        }
        
        function cargaArticuloGrilla (grid_id){
       
           var contador = $('#oculto').get(0).value;
           var id = $.fn.yiiGridView.getSelection(grid_id);
           var nombreClase = 'Nuevo';
           var nombreDescripcion;
           var nombreUnidad;

            nombreDescripcion = nombreClase + '_' + contador + '_' + 'DESCRIPCION';
            nombreUnidad = nombreClase + '_' + contador + '_' + 'UNIDAD';

            $.getJSON(
                '<?php echo $this->createUrl('CargaArticulo'); ?>&id='+id,
                function(data)
                  {
                        $('select[id$=' + nombreUnidad + '] > option').remove();
                        $('#' + nombreDescripcion).val(data.DESCRIPCION);
                        $('#' + nombreClase + '_' + contador + '_' + 'ARTICULO_HIJO').val(id);
                        
                        if(data.UNIDAD){
                             $(data.UNIDAD).each(function()
                             {
                                 var option = $('<option />');
                                 option.attr('value', this.ID).text(this.NOMBRE);
                                 if (this.ID == data.ALMACEN)
                                     option.attr("selected",true);
                                 $('#' + nombreUnidad).append(option);
                             });
                             }
                         else{
                              $('select[id$=' + nombreUnidad + '] > option').remove();
                         }
		  })

            }
    
</script>
<?php

    $cs=Yii::app()->clientScript;
    $cs->registerScriptFile(XHtml::jsUrl('jquery.calculation.min.js'), CClientScript::POS_HEAD);
    $cs->registerScriptFile(XHtml::jsUrl('jquery.format.js'), CClientScript::POS_HEAD);
    $cs->registerScriptFile(XHtml::jsUrl('template.js'), CClientScript::POS_HEAD);
    $cs->registerScriptFile(XHtml::jsUrl('jquery.validate.js'), CClientScript::POS_HEAD);
?>
<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'articulo-ensamble-form',
	'type'=>'horizontal',
                'enableAjaxValidation'=>true,
                'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                ),
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
                <table>
                    <tr>
                        <td width="20%">
                            <?php echo $form->textFieldRow($model,'ARTICULO_PADRE',array('size'=>20,'maxlength'=>20, 'readonly'=>true)); ?>
                        </td>
                        <td>
                            <?php echo CHtml::textField('Articulo', '', array('size'=>50, 'readonly'=>true)); ?>
                        </td>
                    </tr>
                </table> 
    
    
    <div style="overflow-x: scroll; width: 850px; margin-bottom: 10px;">
                    <div class="complex">
                    <div class="panel">
                        <table class="templateFrame grid table table-bordered" cellspacing="0">
                            <thead class="templateHead">
                                <tr>
                                    <td>
                                        <label>Componente</label>
                                    </td>
                                    <td>
                                       &nbsp;
                                    </td>
                                    <td>
                                        <label>Descripción</label>
                                    </td>
                                    <td>
                                        <label>Cantidad</label>
                                    </td>
                                    <td>
                                        <label>Unidad Almacén</label>
                                    </td>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>
                                        <div id="add" class="add">
                                            <?php 
                                                
                                                $this->widget('bootstrap.widgets.BootButton', array(
                                                        'buttonType'=>'button',
                                                        'type'=>'success',
                                                        'label'=>'Nuevo',
                                                        'icon'=>'plus white',
                                                        'htmlOptions' => array('onClick' => 'add()'),
                                                  ));
                                            
                                            ?>
                                        </div>
                                        <textarea class="template" rows="0" cols="0" style="display: none;" >
                                            <tr class="templateContent">
                                                <td>
                                                    <?php echo CHtml::textField('Nuevo[{0}][ARTICULO_HIJO]','',array('class' => 'tonces')); ?>
                                                </td>
                                                <td>
                                                    <?php $this->widget('bootstrap.widgets.BootButton', array(
                                                            'type'=>'info',
                                                            'size'=>'mini',
                                                            'url'=>'#articulo',
                                                            'icon'=>'search',
                                                            'htmlOptions'=>array('data-toggle'=>'modal', 'class' => 'emergente', 'name' => '{0}'),
                                                        )); ?>
                                                </td>
                                                <td>
                                                    <?php echo CHtml::textField('Nuevo[{0}][DESCRIPCION]','',array('readonly' => true)); ?>
                                                </td>
                                                <td>
                                                    <?php echo CHtml::textField('Nuevo[{0}][CANTIDAD]','',array()); ?>
                                                </td>
                                                <td>
                                                    <?php echo CHtml::dropDownList('Nuevo[{0}][UNIDAD]','',array('prompt'=>'Seleccione articulo'), array('disabled'=>true)); ?>
                                                </td>                                                
                                                <td>
                                                    <div id="remover" class="remove">
                                                        <?php 
                                                
                                                            $this->widget('bootstrap.widgets.BootButton', array(
                                                                    'buttonType'=>'button',
                                                                    'type'=>'danger',
                                                                    'label'=>'',
                                                                    'icon'=>'minus white',
                                                                    'size' => 'normal',
                                                                    'htmlOptions'=> array('id'=>'-1', 'onClick'=>'Eliminar(id)'),
                                                                    
                                                              ));
                                                         ?>
                                                    </div>
                                                    <input type="hidden" class="rowIndex" value="{0}" />
                                                </td>
                                            </tr>
                                        </textarea>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody class="templateTarget">
                                    <?php foreach($guardadas as $i=>$item): ?>
                                
                                <tr class="templateContent">
                                    <td>
                            <?php echo $form->textField($item,"[$i]ARTICULO_HIJO", array('class'=>'tonces2')); ?>
                            		</td>
                                    <td>
                                        <?php $this->widget('bootstrap.widgets.BootButton', array(
                                                            'type'=>'info',
                                                            'size'=>'mini',
                                                            'url'=>'#articulo2',
                                                            'icon'=>'search',
                                                            'htmlOptions'=>array('data-toggle'=>'modal', 'class' => 'emergente', 'name' => "$i"),
                                                        )); ?>
                        </td>
                        <td>
                            <?php echo CHtml::textField('ArticuloEnsamble[{0}][DESCRIPCION]',$item->aRTICULOHIJO->NOMBRE,array('readonly' => true)); ?>
                        </td>
                        <td>
                            <?php echo $form->textField($item,"[$i]CANTIDAD", array()); ?>
                        </td>
                        <td>
                            <?php echo CHtml::textField('ArticuloEnsamble[{0}][UNIDAD]',$item->aRTICULOHIJO->uNIDADALMACEN->NOMBRE , array('readonly'=>true)); ?>
                        </td>
                        <td>
                            <div id="remover" class="remove">
                            <?php 
                                $this->widget('bootstrap.widgets.BootButton', array(
                                    'buttonType'=>'button',
                                    'type'=>'danger',
                                    'label'=>'',
                                    'icon'=>'minus white',
                                    'htmlOptions' => array('onClick'=>'Eliminar(id)'),
                                ));

                            ?>
                            </div>
                         </td>
                      </tr>
                      <?php endforeach; ?>                      
                </tbody>
             </table>
         </div><!--panel-->
      </div><!--complex-->
      <?php echo CHtml::HiddenField('oculto',''); ?>
    </div>
        <?php echo CHtml::activeHiddenField($model,'ACTIVO',array('value'=>'S')); ?>
	<div align="center">
            <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model->isNewRecord ? 'Crear' : 'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small', 'url' => array('articuloEnsamble/admin'), 'icon' => 'remove'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php 
    $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'articulo')); ?>
 
	<div class="modal-body">
                <a class="close" data-dismiss="modal">&times;</a>
                <br>
          <?php 
            $this->widget('bootstrap.widgets.BootGridView', array(
            'type'=>'striped bordered condensed',
            'id'=>'articulo-grid',
            'template'=>"{items} {pager}",
            'dataProvider'=>$articulo->search(),
            'selectionChanged'=>'cargaArticuloGrilla',
            'filter'=>$articulo,
            'columns'=>array(
                array(  'name'=>'ARTICULO',
                        'header'=>'Codigo Articulo',
                        'htmlOptions'=>array('data-dismiss'=>'modal'),
                        'type'=>'raw',
                        'value'=>'CHtml::link($data->ARTICULO,"#")'
                    ),
                    'NOMBRE',
                    'TIPO_ARTICULO',
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
 
<?php $this->endWidget(); ?>