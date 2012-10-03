<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COND_PAGO_CONTADO'); ?>
		<?php echo $form->textField($model,'COND_PAGO_CONTADO',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BODEGA_DEFECTO'); ?>
		<?php echo $form->textField($model,'BODEGA_DEFECTO',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CATEGORIA_CLIENTE'); ?>
		<?php echo $form->textField($model,'CATEGORIA_CLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIVEL_PRECIO'); ?>
		<?php echo $form->textField($model,'NIVEL_PRECIO',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DECIMALES_PRECIO'); ?>
		<?php echo $form->textField($model,'DECIMALES_PRECIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCUENTO_PRECIO'); ?>
		<?php echo $form->textField($model,'DESCUENTO_PRECIO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCUENTO_AFECTA_IMP'); ?>
		<?php echo $form->textField($model,'DESCUENTO_AFECTA_IMP',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORMATO_PEDIDO'); ?>
		<?php echo $form->textField($model,'FORMATO_PEDIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORMATO_FACTURA'); ?>
		<?php echo $form->textField($model,'FORMATO_FACTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORMATO_REMISION'); ?>
		<?php echo $form->textField($model,'FORMATO_REMISION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USAR_RUBROS'); ?>
		<?php echo $form->textField($model,'USAR_RUBROS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO1_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO1_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO2_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO2_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO3_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO3_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO4_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO4_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUBRO5_NOMBRE'); ?>
		<?php echo $form->textField($model,'RUBRO5_NOMBRE',array('size'=>15,'maxlength'=>15)); ?>
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
		<?php echo $form->label($model,'ACTUALIZADO_POR'); ?>
		<?php echo $form->textField($model,'ACTUALIZADO_POR',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACTUALIZADO_EL'); ?>
		<?php echo $form->textField($model,'ACTUALIZADO_EL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->