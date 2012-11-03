<div class="form">
    <div>
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id'=>'bodega-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),	
)); ?>
        <?php echo $form->errorSummary($model2); ?>,
                <table style="width: 400px;">
                    <tr>
                        <td>
                            <?php echo $form->textFieldRow($model2,'ID',array('size'=>4,'maxlength'=>4)); ?>
                        </td>
                        <td>
                            <?php $this->widget('bootstrap.widgets.BootButton', array(
                                //'label'=>'Ayuda',
                                'type'=>'succes',
                                'icon'=>'info-sign',
                                'size'=>'mini',
                                'htmlOptions'=>array('data-title'=>'Ayuda', 'data-content'=>'Cadena de caracteres alfanumérico.', 'rel'=>'popover'),
                            )); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $form->textAreaRow($model2,'DESCRIPCION'); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $form->dropDownListRow($model2, 'TIPO', array('C'=>'Consumo','V'=>'Ventas','N'=>'No Disponible')); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $form->textFieldRow($model2,'TELEFONO',array('maxlength'=>20)); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $form->textFieldRow($model2,'DIRECCION',array('maxlength'=>128)); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
		<?php echo CHtml::activeHiddenField($model2,'ACTIVO',array('value'=>'S')); ?>

        <div>
        <?php if($model2->isNewRecord): ?>
        <div class="modal-footer" align="center">
        <?php endif ?>

        <?php if(!$model2->isNewRecord): ?>
        <div class="row-buttons" align="center">
        <?php endif ?>
    	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model2->isNewRecord ? 'Crear' : 'Guardar')); ?>
	<?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small',	'url' => array('/bodega/admin'), 'icon' => 'remove', 'htmlOptions'=>array('data-dismiss'=>'modal')));  ?>	        
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
