<?php
/* @var $this EstadoEmpleadoController */
/* @var $model EstadoEmpleado */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Estados de Empleado'=>array('admin'),
	$model->ESTADO_EMPLEADO,
);

$this->menu=array(
	array('label'=>'List EstadoEmpleado', 'url'=>array('index')),
	array('label'=>'Create EstadoEmpleado', 'url'=>array('create')),
	array('label'=>'Update EstadoEmpleado', 'url'=>array('update', 'id'=>$model->ESTADO_EMPLEADO)),
	array('label'=>'Delete EstadoEmpleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESTADO_EMPLEADO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoEmpleado', 'url'=>array('admin')),
);
?>

<h1>Visualizar Estado de empleado <?php echo $model->ESTADO_EMPLEADO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESTADO_EMPLEADO',
		'DESCRIPCION',
		array(
                    'name'=>'PAGO',
                    'value'=>EstadoEmpleado::getPago($model->PAGO),
                ),
            array(
                    'name'=>'TEMPORAL',
                    'value'=>EstadoEmpleado::getTemporal($model->TEMPORAL),
                ),
	),
)); ?>
