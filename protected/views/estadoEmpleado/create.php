<?php
/* @var $this EstadoEmpleadoController */
/* @var $model EstadoEmpleado */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Estado Empleados'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Estados de Empleado', 'url'=>array('index')),
	array('label'=>'Administrar Estados de Empleado', 'url'=>array('admin')),
);
?>

<h1>Crear Estado de empleado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>