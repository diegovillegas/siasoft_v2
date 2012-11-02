<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'entidad-financiera-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

		<?php echo $form->textFieldRow($model2,'ID'); ?>
		<?php echo $form->dropDownListRow($model2,'NIT', CHtml::listData(Nit::model()->findAll(),'ID','ID'),array('empty'=>'Seleccione...')); ?>
		<?php echo $form->textAreaRow($model2,'DESCRIPCION'); ?>
	<div class="row">
		<?php
			echo CHtml::activeHiddenField($model2,'ACTIVO',array('value'=>'S'));
			echo $form->error($model2,'ACTIVO'); 
		?>
	</div>

	<div class="row-buttons" align="center">
    	<?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model2->isNewRecord ? 'Crear' : 'Guardar')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->