<?php
/* @var $this IngresoCompraController */
/* @var $model IngresoCompra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'INGRESO_COMPRA'); ?>
		<?php echo $form->textField($model,'INGRESO_COMPRA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVEEDOR'); ?>
		<?php echo $form->textField($model,'PROVEEDOR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_INGRESO'); ?>
		<?php echo $form->textField($model,'FECHA_INGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIENE_FACTURA'); ?>
		<?php echo $form->textField($model,'TIENE_FACTURA',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO1'); ?>
		<?php echo $form->textField($model,'RUBRO1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO2'); ?>
		<?php echo $form->textField($model,'RUBRO2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO3'); ?>
		<?php echo $form->textField($model,'RUBRO3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO4'); ?>
		<?php echo $form->textField($model,'RUBRO4',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO5'); ?>
		<?php echo $form->textField($model,'RUBRO5',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOTAS'); ?>
		<?php echo $form->textArea($model,'NOTAS',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APLICADO_POR'); ?>
		<?php echo $form->textField($model,'APLICADO_POR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APLICADO_EL'); ?>
		<?php echo $form->textField($model,'APLICADO_EL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CANCELADO_POR'); ?>
		<?php echo $form->textField($model,'CANCELADO_POR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CANCELADO_EL'); ?>
		<?php echo $form->textField($model,'CANCELADO_EL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREADO_POR'); ?>
		<?php echo $form->textField($model,'CREADO_POR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREADO_EL'); ?>
		<?php echo $form->textField($model,'CREADO_EL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFICADO_POR'); ?>
		<?php echo $form->textField($model,'MODIFICADO_POR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFICADO_EL'); ?>
		<?php echo $form->textField($model,'MODIFICADO_EL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->