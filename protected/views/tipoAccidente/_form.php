
<div class="form">

    <div class="modal-body">

        <?php
        $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
            'id' => 'tipo-accidente-form',
            'type' => 'horizontal',
            'enableAjaxValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
                ));
        ?>


        <?php echo $form->errorSummary($model2); ?>

        <?php echo $form->textFieldRow($model2, 'NOMBRE'); ?>
        <?php echo CHtml::activeHiddenField($model2, 'ACTIVO', array('value' => 'S')); ?>   

    </div>

    <?php if ($model2->isNewRecord): ?>
        <div class="modal-footer" align="center">
        <?php endif ?>
        <?php if (!$model2->isNewRecord): ?>
            <div class="row-buttons" align="center">
            <?php endif ?>
                
            <?php $this->widget('bootstrap.widgets.BootButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'ok-circle white', 'size' => 'small', 'label' => $model2->isNewRecord ? 'Crear' : 'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.BootButton', array('label' => 'Cancelar', 'size' => 'small', 'url' => array('/tipoAccidente/admin'), 'icon' => 'remove', 'htmlOptions' => array('data-dismiss' => 'modal'))); ?>	        
        </div>


        <?php $this->endWidget(); ?>

    </div><!-- form -->