<?php

$this->widget('ext.pdfGrid.EPDFGrid', array(
    'id'        => 'categoria-pdf',
    'fileName'  => 'Categorias',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
        'DESCRIPCION',
		array(
                        'name'=>'TIPO',
                        'header'=>'Tipo',
                        'value'=>'Categoria::tipo($data->TIPO)',
                        'filter'=>array('C'=>'Cliente','P'=>'Proveedor'),
                    ),
    ),
    'config'    => array(
        'title'     => 'Categorias',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
