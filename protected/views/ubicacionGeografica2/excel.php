<?php
if($model!==null){ 
$labels = new UbicacionGeografica2?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border="1">
<tr>    <th> <?php echo $labels->getAttributeLabel('ID')?></th>
        <th> <?php echo $labels->getAttributeLabel('UBICACION_GEOGRAFICA1')?></th>
        <th> <?php echo $labels->getAttributeLabel('NOMBRE')?></th>
    
</tr><?php $x=0; ?><?php foreach ($model as $value) { ?><?php $x++;?>
<tr>
    <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->ID?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo $value->uBICACIONGEOGRAFICA1->NOMBRE?>
            
            
            
            
            </td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->NOMBRE?></td>
        </tr><?php } ?>	   
</table><?php } ?>
