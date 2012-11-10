<?php

$this->widget('ext.pdfGrid.EPDFGrid', array(
    'id'        => 'entidad-financiera-pdf',
    'fileName'  => 'Entidades Finacieras',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
                'ID',
		'NIT',
		'DESCRIPCION',
    ),
    'config'    => array(
        'title'     => 'Entidades Finacieras',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
