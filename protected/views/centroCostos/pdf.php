<?php

$this->widget('ext.PdfGrid.EPDFGrid', array(
    'id'        => 'centro-costos-pdf',
    'fileName'  => 'Centro de Costos',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider->searchPdf(), //puede ser $model->search()
    'columns'   => array(
        'ID',
		'DESCRIPCION',
		array(
                        'name'=>'TIPO',
                        'header'=>'Tipo',
                        'value'=>'CentroCostos::tipo($data->TIPO)',
                        'filter'=>array('G'=>'Gasto','I'=>'Ingreso','A'=>'Ambos'),
                    ),
    ),
    'config'    => array(
        'title'     => 'Centro de Costos',
        'showLogo'  => true,
        //'colWidths' => array(40, 90, 40),
    ),
));


?>
