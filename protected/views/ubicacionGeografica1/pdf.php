<?php

$this->widget('ext.PdfGrid.EPDFGrid', array(
    'id'        => 'ubicacion-geografica1-pdf',
    'fileName'  => 'Departamentos',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
        'ID',
        array(
            'name'=>'PAIS',
            'value'=>'$data->PAIS = "COL" ? "Colombia" : $data->PAIS'
        ),
        'NOMBRE',
        
    ),
    'config'    => array(
        'title'     => 'Departamentos',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
