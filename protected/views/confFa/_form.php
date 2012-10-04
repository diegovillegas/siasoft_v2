<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'conf-fa-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
        <?php $this->widget('bootstrap.widgets.BootTabbable', array(
        'type'=>'tabs', // 'tabs' or 'pills'
        'tabs'=>array(

            array('label'=>'General', 'content'=>
                $form->textFieldRow($model,'COND_PAGO_CONTADO',array('size'=>4,'maxlength'=>4))
                .$form->textFieldRow($model,'BODEGA_DEFECTO',array('size'=>4,'maxlength'=>4))
                .$form->textFieldRow($model,'CATEGORIA_CLIENTE')
                .$form->textFieldRow($model,'NIVEL_PRECIO',array('size'=>12,'maxlength'=>12))
                .$form->textField($model,'DECIMALES_PRECIO'), 'active'=>true),

            array('label'=>'Otros', 'content'=>
                'contenido'),


            array('label'=>'Direcciones', 'content'=>
                 'contenido'),


            array('label'=>'Cuentas', 'content'=>
                'contenido'),

            array('label'=>'Notas', 'content'=>
                'contenido'),
        ),
    )); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCUENTO_PRECIO'); ?>
		<?php echo $form->textField($model,'DESCUENTO_PRECIO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DESCUENTO_PRECIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCUENTO_AFECTA_IMP'); ?>
		<?php echo $form->textField($model,'DESCUENTO_AFECTA_IMP',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'DESCUENTO_AFECTA_IMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMATO_PEDIDO'); ?>
		<?php echo $form->textField($model,'FORMATO_PEDIDO'); ?>
		<?php echo $form->error($model,'FORMATO_PEDIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMATO_FACTURA'); ?>
		<?php echo $form->textField($model,'FORMATO_FACTURA'); ?>
		<?php echo $form->error($model,'FORMATO_FACTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMATO_REMISION'); ?>
		<?php echo $form->textField($model,'FORMATO_REMISION'); ?>
		<?php echo $form->error($model,'FORMATO_REMISION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USAR_RUBROS'); ?>
		<?php echo $form->textField($model,'USAR_RUBROS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USAR_RUBROS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO1_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO1_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RUBRO1_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO2_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO2_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RUBRO2_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO3_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO3_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RUBRO3_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO4_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO4_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RUBRO4_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUBRO5_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO5_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RUBRO5_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREADO_POR'); ?>
		<?php echo $form->textField($model,'CREADO_POR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'CREADO_POR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREADO_EL'); ?>
		<?php echo $form->textField($model,'CREADO_EL'); ?>
		<?php echo $form->error($model,'CREADO_EL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACTUALIZADO_POR'); ?>
		<?php echo $form->textField($model,'ACTUALIZADO_POR',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ACTUALIZADO_POR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACTUALIZADO_EL'); ?>
		<?php echo $form->textField($model,'ACTUALIZADO_EL'); ?>
		<?php echo $form->error($model,'ACTUALIZADO_EL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->