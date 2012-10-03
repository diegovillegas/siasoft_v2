<?php
/* @var $this ConfFaController */
/* @var $model ConfFa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COND_PAGO_CONTADO')); ?>:</b>
	<?php echo CHtml::encode($data->COND_PAGO_CONTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BODEGA_DEFECTO')); ?>:</b>
	<?php echo CHtml::encode($data->BODEGA_DEFECTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CATEGORIA_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->CATEGORIA_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIVEL_PRECIO')); ?>:</b>
	<?php echo CHtml::encode($data->NIVEL_PRECIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DECIMALES_PRECIO')); ?>:</b>
	<?php echo CHtml::encode($data->DECIMALES_PRECIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCUENTO_PRECIO')); ?>:</b>
	<?php echo CHtml::encode($data->DESCUENTO_PRECIO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCUENTO_AFECTA_IMP')); ?>:</b>
	<?php echo CHtml::encode($data->DESCUENTO_AFECTA_IMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORMATO_PEDIDO')); ?>:</b>
	<?php echo CHtml::encode($data->FORMATO_PEDIDO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORMATO_FACTURA')); ?>:</b>
	<?php echo CHtml::encode($data->FORMATO_FACTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FORMATO_REMISION')); ?>:</b>
	<?php echo CHtml::encode($data->FORMATO_REMISION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USAR_RUBROS')); ?>:</b>
	<?php echo CHtml::encode($data->USAR_RUBROS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO1_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO1_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO2_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO2_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO3_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO3_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO4_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO4_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO5_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO5_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_EL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTUALIZADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->ACTUALIZADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTUALIZADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->ACTUALIZADO_EL); ?>
	<br />

	*/ ?>

</div>