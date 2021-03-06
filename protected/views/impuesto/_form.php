<div class="form">
    <div>
<?php $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'impuesto-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
			'validateOnSubmit'=>true,
	),
	'type'=>'horizontal',
)); ?>

	<?php echo $form->errorSummary($model2); ?>

	<div class="row">
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
                            <?php echo $form->textFieldRow($model2,'NOMBRE',array('maxlength'=>64)); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $form->textFieldRow($model2,'PROCENTAJE',array('maxlength'=>28, 'prepend'=>'%')); ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            
		<div class="row">
		<?php echo CHtml::activeHiddenField($model2,'ACTIVO',array('value'=>'S')); ?>
		<?php echo $form->error($model2,'ACTIVO'); ?>
	</div>
        </div>
	<?php if($model2->isNewRecord): ?>
        <div class="modal-footer" align="center">
        <?php endif ?>

        <?php if(!$model2->isNewRecord): ?>
        <div class="row-buttons" align="center">
        <?php endif ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label'=>$model2->isNewRecord ? 'Crear' : 'Guardar', 'buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white')); ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small', 'url' => array('/impuesto/admin'), 'icon' => 'remove', 'htmlOptions'=>array('data-dismiss'=>'modal')));  ?>	        
        </div>
        </div>
<?php $this->endWidget(); ?>

</div><!-- form -->