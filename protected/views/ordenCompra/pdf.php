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
                        <b>Orden de compra:</b> <?php echo $orden->ORDEN_COMPRA; ?>
                    </td>
                </tr>
            </table>
        </td>               
    </tr>
    <tr>
        <td width="50%">
            <b>Fecha:</b> <?php echo $orden->FECHA; ?><br />
            <b>Proveedor:</b> <?php echo $orden->pROVEEDOR->NOMBRE; ?><br /> 
            <b>Prioridad:</b> <?php echo OrdenCompra::model()->prioridad($orden->PRIORIDAD); ?>            
        </td>
        <td align="right">
            <b>Fecha Requerida:</b> <?php echo $orden->FECHA_REQUERIDA; ?><br />
            <b>Condición de pago:</b> <?php echo $orden->cONDICIONPAGO->DESCRIPCION; ?><br />
            <b>Estado:</b> <?php echo OrdenCompra::model()->estado($orden->ESTADO); ?><br />
        </td>        
    </tr>
    <tr>
        <td colspan="2">
            <table cellpadding="10" border="1" bordercolor="#000000" style="border-collapse:collapse;" align="center">
                <tr>
                    <th>Artículo</th>
                    <th>Nombre Artículo</th>
                    <th>Unidad</th>
                    <th>Cantidad Ordenada</th>
                    <th>Precio Unitario</th>
                    <th>Bodega</th>
                </tr>
                <?php foreach($lineas as $ln){ ?>
                    <tr>
                        <td><?php echo $ln->ARTICULO; ?></td>
                        <td><?php echo $ln->DESCRIPCION; ?></td>
                        <td><?php echo $ln->uNIDADCOMPRA->NOMBRE; ?></td>
                        <td><?php echo $ln->CANTIDAD_ORDENADA; ?></td>
                        <td><?php echo $ln->PRECIO_UNITARIO; ?></td>
                        <td><?php echo $ln->bODEGA->DESCRIPCION; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Observaciones:</b> <?php $orden->OBSERVACIONES; ?></td>             
    </tr>
    <tr>
        <td width="50%">
            <b>Elaborado por:</b> <?php echo Yii::app()->user->name; ?><br />
            <b>Autorizado por:</b> <?php echo $orden->AUTORIZADA_POR; ?>
        </td>
        <td align="right">
            <b>Fecha de Elaboración:</b> <?php echo date('Y/m/d'); ?><br />
            <b>Autorizado el:</b> <?php echo $orden->FECHA_AUTORIZADA; ?>
        </td>        
    </tr>
    <tr>
        <td colspan="2" align="center">Desarrollado por Tramasoft Soluciones TIC - www.tramasoft.com</td>     
    </tr>
</table>