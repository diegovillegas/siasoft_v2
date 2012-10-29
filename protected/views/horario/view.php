<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Horarios' => array('admin'),
    $model->HORARIO,
);

$this->menu = array(
    array('label' => 'List Horario', 'url' => array('index')),
    array('label' => 'Create Horario', 'url' => array('create')),
    array('label' => 'Update Horario', 'url' => array('update', 'id' => $model->HORARIO)),
    array('label' => 'Delete Horario', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->HORARIO), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Horario', 'url' => array('admin')),
);
?>

<h1>Visualizacion Horario <?php echo $model->HORARIO; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'HORARIO',
        'DESCRIPCION',
        'TOLERA_ENTRADA',
        'TOLERA_SALIDA',
        'REDONDEO_ENTRADA',
        'REDONDEO_SALIDA',
    ),
));
?>
