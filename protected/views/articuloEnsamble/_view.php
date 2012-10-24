<?php
/* @var $this ArticuloEnsambleController */
/* @var $model ArticuloEnsamble */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULO_PADRE')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULO_PADRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICULO_HIJO')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICULO_HIJO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CANTIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->CANTIDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTIVO')); ?>:</b>
	<?php echo CHtml::encode($data->ACTIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_EL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTUALIZADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->ACTUALIZADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTUALIZADO_EL')); ?>:</b>
	<?php echo CHtml::encode($data->ACTUALIZADO_EL); ?>
	<br />

	*/ ?>

</div>