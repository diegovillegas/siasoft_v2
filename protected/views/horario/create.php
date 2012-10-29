<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Horarios' => array('admin'),
    'Nuevo',
);

$this->menu = array(
    array('label' => 'List Horario', 'url' => array('index')),
    array('label' => 'Manage Horario', 'url' => array('admin')),
);
?>

<h1>Crear Horario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>