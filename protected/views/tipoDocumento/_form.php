<div class="form">
    <div>
<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'type' => 'horizontal',
	'id'=>'tipo-documento-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
        
                <?php echo $form->errorSummary($model2); ?>
                <table style="width: 400px;">
                    <tr>
                        <td>
                            <?php echo $form->textFieldRow($model2,'ID',array('size'=>10,'maxlength'=>10)); ?>
                        </td>
                        <td>
                            <?php $this->widget('bootstrap.widgets.BootButton', array(
                                //'label'=>'Ayuda',
                                'type'=>'succes',
                                'icon'=>'info-sign',
                                'size'=>'mini',
                                'htmlOptions'=>array('data-title'=>'Ayuda', 'data-content'=>'Identificador del tipo de documento.<br>Ej.: C.C.', 'rel'=>'popover'),
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
                            <?php echo $form->textFieldRow($model2,'MASCARA',array('size'=>20,'maxlength'=>20)); ?>
                        </td>
                        <td>
                            <?php $this->widget('bootstrap.widgets.BootButton', array(
                                //'label'=>'Ayuda',
                                'type'=>'succes',
                                'icon'=>'info-sign',
                                'size'=>'mini',
                                'htmlOptions'=>array('data-title'=>'Ayuda', 'data-content'=>'Es el "Formato" que nos define la cantidad de dígitos y caracteres para el tipo de documento creado.', 'rel'=>'popover'),
                            )); ?>
                        </td>
                    </tr>
                </table>

	<div class="row">
		<?php
			echo CHtml::activeHiddenField($model2,'ACTIVO',array('value'=>'S'));
			echo $form->error($model2,'ACTIVO'); 
		?>
	</div>
    </div>
	<?php if($model2->isNewRecord): ?>
        <div class="modal-footer" align="center">
        <?php endif ?>

        <?php if(!$model2->isNewRecord): ?>
        <div class="row-buttons" align="center">
        <?php endif ?>
    	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model2->isNewRecord ? 'Crear' : 'Guardar')); ?>
	<?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small',	'url' => '#', 'icon' => 'remove', 'htmlOptions'=>array('data-dismiss'=>'modal')));  ?>	        
        </div>


<?php $this->endWidget(); ?>

</div><!-- form -->