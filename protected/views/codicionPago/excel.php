<?php
if($model!==null){ 
$labels = new CodicionPago?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border='1'>
<tr>    <th> <?php echo $labels->getAttributeLabel('ID')?></th>
        <th> <?php echo $labels->getAttributeLabel('DESCRIPCION')?></th>
        <th> <?php echo $labels->getAttributeLabel('DIAS_NETO')?></th>
    
</tr><?php $x=0; ?><?php foreach ($model as $value) { ?><?php $x++;?>
<tr>
    <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->ID?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->DESCRIPCION?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->DIAS_NETO?></td>
        </tr><?php } ?>	   
</table><?php } ?>
