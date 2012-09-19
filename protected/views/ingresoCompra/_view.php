<?php
/* @var $this IngresoCompraController */
/* @var $model IngresoCompra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('INGRESO_COMPRA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->INGRESO_COMPRA), array('view', 'id'=>$data->INGRESO_COMPRA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVEEDOR')); ?>:</b>
	<?php echo CHtml::encode($data->PROVEEDOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_INGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIENE_FACTURA')); ?>:</b>
	<?php echo CHtml::encode($data->TIENE_FACTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO1')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO2')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO3')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO4')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUBRO5')); ?>:</b>
	<?php echo CHtml::encode($data->RUBRO5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTAS')); ?>:</b>
	<?php echo CHtml::encode($data->NOTAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APLICADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->APLICADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APLICADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->APLICADO_EL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CANCELADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->CANCELADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CANCELADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->CANCELADO_EL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_EL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFICADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFICADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFICADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFICADO_EL); ?>
	<br />

	*/ ?>

</div>