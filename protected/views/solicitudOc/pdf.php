<table cellspacing="20" style="font-family: Tahoma;">
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td width="33%">
                        <?php 
                            if($compania->LOGO != ''){
                                echo CHtml::image(Yii::app()->request->baseUrl."/logo/".$compania->LOGO, 'Logo');     
                            }
                            else{
                                echo $compania->NOMBRE;
                            }
                        ?>
                    </td>
                    <td width="33%" align="center">
                        <?php echo $compania->NOMBRE_ABREV.'<br /><b>Nit:</b> '.$compania->NIT; ?>
                    </td>
                    <td width="33%" align="right">
                        <b>Solicitud de compra:</b> <?php echo $solicitud->SOLICITUD_OC; ?>
                    </td>
                </tr>
            </table>
        </td>               
    </tr>
    <tr>
        <td width="50%">
            <b>Fecha Solicitud:</b> <?php echo $solicitud->FECHA_SOLICITUD; ?><br />
            <b>Fecha Requerida:</b> <?php echo $solicitud->FECHA_REQUERIDA; ?><br /> 
            <b>Estado:</b> <?php echo SolicitudOc::model()->estado($solicitud->ESTADO); ?><br />
        </td>
        <td align="right">
            <b>Departamento:</b> <?php echo $solicitud->dEPARTAMENTO->DESCRIPCION; ?><br />
            <b>Prioridad:</b> <?php echo SolicitudOc::model()->prioridad($solicitud->PRIORIDAD); ?><br />            
        </td>        
    </tr>
    <tr>
        <td colspan="2">
            <table cellpadding="10" border="1" bordercolor="#000000" style="border-collapse:collapse;" align="center">
                <tr>
                    <th>Artículo</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Unidad</th>
                </tr>
                <?php foreach($lineas as $ln){ ?>
                    <tr>
                        <td><?php echo $ln->aRTICULO->NOMBRE; ?></td>
                        <td><?php echo $ln->DESCRIPCION; ?></td>
                        <td><?php echo $ln->CANTIDAD; ?></td>
                        <td><?php echo $ln->uNIDAD->NOMBRE; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Observaciones:</b> Ninguna</td>             
    </tr>
    <tr>
        <td width="50%"><b>Elaborado por:</b> <?php echo Yii::app()->user->name; ?></td>
        <td align="right"><b>Fecha de Elaboración:</b> <?php echo date('Y/m/d'); ?></td>        
    </tr>
    <tr>
        <td colspan="2" align="center">Desarrollado por Tramasoft Soluciones TIC - www.tramasoft.com</td>     
    </tr>
</table>