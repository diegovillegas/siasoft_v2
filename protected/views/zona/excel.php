<?php
if($model!==null){ 
$labels = new Zona?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border='1'>
<tr>    <th> <?php echo $labels->getAttributeLabel('PAIS')?></th>
        <th> <?php echo $labels->getAttributeLabel('NOMBRE')?></th>
    
</tr><?php $x=0; ?><?php foreach ($model as $value) { ?><?php $x++;?>
<tr>
    <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->pAIS->NOMBRE?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->NOMBRE?></td>
        </tr><?php } ?>	   
</table><?php } ?>
