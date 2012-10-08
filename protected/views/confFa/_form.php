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
                .$form->textFieldRow($model,'DECIMALES_PRECIO')
                .$form->textFieldRow($model,'DESCUENTO_PRECIO',array('size'=>1,'maxlength'=>1))
                .$form->textFieldRow($model,'DESCUENTO_AFECTA_IMP',array('size'=>1,'maxlength'=>1)), 'active'=>true),

            array('label'=>'Impresión', 'content'=>
                $form->textFieldRow($model,'FORMATO_PEDIDO')
                .$form->textFieldRow($model,'FORMATO_FACTURA')
                .$form->textFieldRow($model,'FORMATO_REMISION')),


            array('label'=>'Textos', 'content'=>
                 $form->textFieldRow($model,'USAR_RUBROS',array('size'=>1,'maxlength'=>1))
                .$form->textFieldRow($model,'RUBRO1_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO2_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO3_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO4_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'RUBRO5_NOMBRE',array('size'=>15,'maxlength'=>15))
                .$form->textFieldRow($model,'OBSERVACIONES',array('size'=>15,'maxlength'=>15))                
                ),
        ),
    )); ?>

	<div align="center">
            <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'ok-circle white', 'size' =>'small', 'label'=>$model->isNewRecord ? 'Crear' : 'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label'=>'Cancelar', 'size'=>'small',	'url' => array('confCo/admin'), 'icon' => 'remove'));  ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->