<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consecutivo-fa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODIGO_CONSECUTIVO'); ?>
		<?php echo $form->textField($model,'CODIGO_CONSECUTIVO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CODIGO_CONSECUTIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMATO_IMPRESION'); ?>
		<?php echo $form->textField($model,'FORMATO_IMPRESION'); ?>
		<?php echo $form->error($model,'FORMATO_IMPRESION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO'); ?>
		<?php echo $form->textField($model,'TIPO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LONGITUD'); ?>
		<?php echo $form->textField($model,'LONGITUD'); ?>
		<?php echo $form->error($model,'LONGITUD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALOR_CONSECUTIVO'); ?>
		<?php echo $form->textField($model,'VALOR_CONSECUTIVO',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'VALOR_CONSECUTIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MASCARA'); ?>
		<?php echo $form->textField($model,'MASCARA',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'MASCARA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USA_DESPACHOS'); ?>
		<?php echo $form->textField($model,'USA_DESPACHOS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USA_DESPACHOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USA_ESQUEMA_CAJAS'); ?>
		<?php echo $form->textField($model,'USA_ESQUEMA_CAJAS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'USA_ESQUEMA_CAJAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALOR_MAXIMO'); ?>
		<?php echo $form->textField($model,'VALOR_MAXIMO',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'VALOR_MAXIMO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NUMERO_COPIAS'); ?>
		<?php echo $form->textField($model,'NUMERO_COPIAS'); ?>
		<?php echo $form->error($model,'NUMERO_COPIAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORIGINAL'); ?>
		<?php echo $form->textField($model,'ORIGINAL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ORIGINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COPIA1'); ?>
		<?php echo $form->textField($model,'COPIA1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COPIA1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COPIA2'); ?>
		<?php echo $form->textField($model,'COPIA2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COPIA2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COPIA3'); ?>
		<?php echo $form->textField($model,'COPIA3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COPIA3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COPIA4'); ?>
		<?php echo $form->textField($model,'COPIA4',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COPIA4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COPIA5'); ?>
		<?php echo $form->textField($model,'COPIA5',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COPIA5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESOLUCION'); ?>
		<?php echo $form->textField($model,'RESOLUCION',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'RESOLUCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACTIVO'); ?>
		<?php echo $form->textField($model,'ACTIVO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ACTIVO'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->