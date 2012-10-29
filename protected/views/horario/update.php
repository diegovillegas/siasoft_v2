<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Horarios' => array('admin'),
    $model->HORARIO => array('view', 'id' => $model->HORARIO),
    'Actualizar',
);

$this->menu = array(
    array('label' => 'List Horario', 'url' => array('index')),
    array('label' => 'Create Horario', 'url' => array('create')),
    array('label' => 'View Horario', 'url' => array('view', 'id' => $model->HORARIO)),
    array('label' => 'Manage Horario', 'url' => array('admin')),
);
?>

<h1>Actualizar Horario <?php echo $model->HORARIO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tablaConceptos'=>$tablaConceptos)); ?>