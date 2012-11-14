<?php

$this->widget('ext.PdfGrid.EPDFGrid', array(
    'id'        => 'impuesto-pdf',
    'fileName'  => 'Impuestos',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
               'ID',
		'NOMBRE',
		'PROCENTAJE',
    ),
    'config'    => array(
        'title'     => 'Impuestos',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
