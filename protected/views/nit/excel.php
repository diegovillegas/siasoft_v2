<?php
if($model!==null){ 
$labels = new Nit?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border='1'>
<tr>    <th> <?php echo $labels->getAttributeLabel('ID')?></th>
        <th> <?php echo $labels->getAttributeLabel('TIIPO_DOCUMENTO')?></th>
        <th> <?php echo $labels->getAttributeLabel('RAZON_SOCIAL')?></th>
        <th> <?php echo $labels->getAttributeLabel('ALIAS')?></th>
        <th> <?php echo $labels->getAttributeLabel('OBSERVACIONES')?></th>
    
</tr><?php $x=0; ?><?php foreach ($model as $value) { ?><?php $x++;?>
<tr>
    <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->ID?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->TIIPO_DOCUMENTO?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->RAZON_SOCIAL?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->ALIAS?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->OBSERVACIONES?></td>
        </tr><?php } ?>	   
</table><?php } ?>
