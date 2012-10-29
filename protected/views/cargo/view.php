<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Cargo' => array('admin'),
    $model->CARGO,
);

$this->menu = array(
    array('label' => 'List Cargo', 'url' => array('index')),
    array('label' => 'Create Cargo', 'url' => array('create')),
    array('label' => 'Update Cargo', 'url' => array('update', 'id' => $model->CARGO)),
    array('label' => 'Delete Cargo', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->CARGO), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Cargo', 'url' => array('admin')),
);
?>

<h1>Visualizar Cargo <?php echo $model->CARGO; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'CARGO',
        'DESCRIPCION',
        'SALARIO_MINIMO',
        'SALARIO_INTERMEDIO1',
        'SALARIO_INTERMEDIO2',
        'SALARIO_MAXIMO',
        'SALARIO_ACTUAL',
        'FUNCIONES',
        'NOTAS',
    ),
));
?>
