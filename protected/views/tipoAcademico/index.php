<?php
/* @var $this TipoAcademicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recursos Humanos' => array('admin'),
	'Tipos de Academicos' 
);

$this->menu=array(
	array('label'=>'Create TipoAcademico', 'url'=>array('create')),
	array('label'=>'Manage TipoAcademico', 'url'=>array('admin')),
);
?>

<h1>Tipos de Academicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
