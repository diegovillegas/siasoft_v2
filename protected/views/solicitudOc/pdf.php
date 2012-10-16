<table width="100%" cellspacing="20" cellpadding="10" style="font-family: Tahoma;">
    <tr>
        <td>
            <?php 
                if($compania->LOGO != ''){
                    echo CHtml::image(Yii::app()->request->baseUrl."/logo/".$compania->LOGO, 'Logo');     
                }
                else{
                    echo $compania->NOMBRE;
                }
            ?>
        </td>
        <td width="50%">
            <b>Consecutivo:</b> <?php echo $solicitud->SOLICITUD_OC; ?><br />
            <b>Generado el:</b> <?php echo date('Y/m/d'); ?><br />
            <b>Estado:</b> <?php echo SolicitudOc::model()->estado($solicitud->ESTADO); ?><br />
        </td>
    </tr>    
    <tr>
        <?php 
            $i=0;
            foreach($lineas as $ln){
        ?>
        <td width="50%" style="border: solid 1px black;"><p>
            <b>Numero de linea:</b> <?php echo $ln->LINEA_NUM; ?><br />
            <b>Articulo:</b> <?php echo $ln->aRTICULO->NOMBRE; ?><br />
            <b>Descripcion:</b> <?php echo $ln->DESCRIPCION; ?><br />
            <b>Cantidad:</b> <?php echo $ln->CANTIDAD; ?><br />
            <b>Unidad:</b> <?php echo $ln->uNIDAD->NOMBRE; ?><br />
            <b>Saldo:</b> <?php echo $ln->SALDO; ?><br />
            <b>Comentario:</b> <?php echo $ln->COMENTARIO; ?><br />
            <b>Fecha requerida:</b> <?php echo $ln->FECHA_REQUERIDA; ?><br />
            <b>Estado:</b> <?php echo SolicitudOcLinea::model()->estado($ln->ESTADO); ?>
        </p></td>
        <?php
        $i++;
                if($i == 2){
                    echo '</tr><tr>';
                    $i=0;
                }
            }
        ?>
    </tr>
    <tr>
        <td colspan="2">
            <h2>Otros Datos:</h2>
            <p>&nbsp;</p>
            <b>Departamento:</b> <?php echo $solicitud->dEPARTAMENTO->DESCRIPCION; ?><br />
            <b>Fecha Solicitud:</b> <?php echo $solicitud->FECHA_SOLICITUD; ?><br />
            <b>Fecha Requerida:</b> <?php echo $solicitud->FECHA_REQUERIDA; ?><br />
            <?php if($solicitud->AUTORIZADA_POR != ''){ ?>
                <b>Autorizada por:</b> <?php echo $solicitud->AUTORIZADA_POR; ?><br />
                <b>Fecha Autorizada:</b> <?php echo $solicitud->FECHA_AUTORIZADA; ?><br />
            <?php } ?>
            <?php if($solicitud->CANCELADA_POR != ''){ ?>
                <b>Cancelada por:</b> <?php echo $solicitud->CANCELADA_POR; ?><br />
                <b>Fecha Cancelada:</b> <?php echo $solicitud->FECHA_CANCELADA; ?><br />
            <?php } ?>
                <b>Prioridad:</b> <?php echo SolicitudOc::model()->prioridad($solicitud->PRIORIDAD); ?><br />
            <?php if($conf->USAR_RUBROS == 'S'){ ?>
                <b>Rubro 1:</b> <?php echo $solicitud->RUBRO1; ?><br />
                <b>Rubro 2:</b> <?php echo $solicitud->RUBRO2; ?><br />
                <b>Rubro 3:</b> <?php echo $solicitud->RUBRO3; ?><br />
                <b>Rubro 4:</b> <?php echo $solicitud->RUBRO4; ?><br />
                <b>Rubro 5:</b> <?php echo $solicitud->RUBRO5; ?><br />
            <?php } ?>
        </td>
    </tr>
</table>