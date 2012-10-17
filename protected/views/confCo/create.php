<?php
$this->breadcrumbs=array(
	'Configuracion Compras'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List ConfCo', 'url'=>array('index')),
	array('label'=>'Manage ConfCo', 'url'=>array('admin')),
);
?>

<h1>Configuracion de compras</h1>
<br />

<?php Yii::app()->user->setFlash('warning', '<h3 align="center">Realice su configuración antes de continuar...</h3>');
            
    $this->widget('bootstrap.widgets.BootAlert'); 

    $bus= ConfCo::model()->find();
    
    if($bus)
        $this->redirect(array('update','id'=>$bus->ID));
    else
        $this->renderPartial('_form', array('model'=>$model)); ?>