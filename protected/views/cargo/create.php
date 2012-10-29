<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Cargo' => array('admin'),
    'Nuevo',
);
?>

<h1>Crear Cargo</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>