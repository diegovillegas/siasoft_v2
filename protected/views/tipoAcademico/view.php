<?php
/* @var $this TipoAcademicoController */
/* @var $model TipoAcademico */

$this->breadcrumbs = array(
    'Recursos Humanos' => array('admin'),
    'Tipos de Academicos' => array('admin'),
    $model->TIPO_ACADEMICO,
);

$this->menu = array(
    array('label' => 'List TipoAcademico', 'url' => array('index')),
    array('label' => 'Create TipoAcademico', 'url' => array('create')),
    array('label' => 'Update TipoAcademico', 'url' => array('update', 'id' => $model->TIPO_ACADEMICO)),
    array('label' => 'Delete TipoAcademico', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->TIPO_ACADEMICO), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TipoAcademico', 'url' => array('admin')),
);
?>

<h1>Ver Tipo de Academico <?php echo $model->TIPO_ACADEMICO; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'TIPO_ACADEMICO',
        'NOMBRE',
    ),
));
?>
