<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PEDIDO'); ?>
		<?php echo $form->textField($model,'PEDIDO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE'); ?>
		<?php echo $form->textField($model,'CLIENTE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BODEGA'); ?>
		<?php echo $form->textField($model,'BODEGA',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONDICION_PAGO'); ?>
		<?php echo $form->textField($model,'CONDICION_PAGO',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIVEL_PRECIO'); ?>
		<?php echo $form->textField($model,'NIVEL_PRECIO',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_PEDIDO'); ?>
		<?php echo $form->textField($model,'FECHA_PEDIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_PROMETIDA'); ?>
		<?php echo $form->textField($model,'FECHA_PROMETIDA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_EMBARQUE'); ?>
		<?php echo $form->textField($model,'FECHA_EMBARQUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDEN_COMPRA'); ?>
		<?php echo $form->textField($model,'ORDEN_COMPRA',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_ORDEN'); ?>
		<?php echo $form->textField($model,'FECHA_ORDEN'); ?>
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
		<?php echo $form->label($model,'COMENTARIOS_CXC'); ?>
		<?php echo $form->textField($model,'COMENTARIOS_CXC',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OBSERVACIONES'); ?>
		<?php echo $form->textArea($model,'OBSERVACIONES',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL_MERCADERIA'); ?>
		<?php echo $form->textField($model,'TOTAL_MERCADERIA',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO_ANTICIPO'); ?>
		<?php echo $form->textField($model,'MONTO_ANTICIPO',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO_FLETE'); ?>
		<?php echo $form->textField($model,'MONTO_FLETE',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO_SEGURO'); ?>
		<?php echo $form->textField($model,'MONTO_SEGURO',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_DESCUENTO1'); ?>
		<?php echo $form->textField($model,'TIPO_DESCUENTO1',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_DESCUENTO2'); ?>
		<?php echo $form->textField($model,'TIPO_DESCUENTO2',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO_DESCUENTO1'); ?>
		<?php echo $form->textField($model,'MONTO_DESCUENTO1',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO_DESCUENTO2'); ?>
		<?php echo $form->textField($model,'MONTO_DESCUENTO2',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POR_DESCUENTO1'); ?>
		<?php echo $form->textField($model,'POR_DESCUENTO1',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POR_DESCUENTO2'); ?>
		<?php echo $form->textField($model,'POR_DESCUENTO2',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL_IMPUESTO1'); ?>
		<?php echo $form->textField($model,'TOTAL_IMPUESTO1',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOTAL_A_FACTURAR'); ?>
		<?php echo $form->textField($model,'TOTAL_A_FACTURAR',array('size'=>28,'maxlength'=>28)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REMITIDO'); ?>
		<?php echo $form->textField($model,'REMITIDO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESERVADO'); ?>
		<?php echo $form->textField($model,'RESERVADO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>1,'maxlength'=>1)); ?>
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