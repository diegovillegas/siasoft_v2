<?php

$this->widget('ext.pdfGrid.EPDFGrid', array(
    'id'        => 'ubicacion-geografica2-pdf',
    'fileName'  => 'Departamentos',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
        'ID',
        'UBICACION_GEOGRAFICA1',
        'NOMBRE',
        
    ),
    'config'    => array(
        'title'     => 'Municipios',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
