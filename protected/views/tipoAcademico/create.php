<?php
/* @var $this TipoAcademicoController */
/* @var $model TipoAcademico */

$this->breadcrumbs=array(
    'Recursos Humanos' => array('admin'),
	'Tipos de Academicos'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'List TipoAcademico', 'url'=>array('index')),
	array('label'=>'Manage TipoAcademico', 'url'=>array('admin')),
);
?>

<h1>Create TipoAcademico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>