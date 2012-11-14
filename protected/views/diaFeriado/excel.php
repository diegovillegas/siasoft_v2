<?php
if($model!==null){ 
$labels = new DiaFeriado?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border='1'>
<tr>    <th> <?php echo $labels->getAttributeLabel('TIPO')?></th>
        <th> <?php echo $labels->getAttributeLabel('DIA')?></th>
        <th> <?php echo $labels->getAttributeLabel('MES')?></th>
        <th> <?php echo $labels->getAttributeLabel('ANIO')?></th>
        <th> <?php echo $labels->getAttributeLabel('DESCRIPCION')?></th>
    
</tr><?php $x=0; ?><?php foreach ($model as $value) { ?><?php $x++;?>
<tr>
    <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo DiaFeriado::tipo($value->TIPO)?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->DIA?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->MES?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->ANIO?></td>
            <td <?php echo ($x)%2==0 ?"style='background-color:#CCC'":""?>><?php echo$value->DESCRIPCION?></td>
        </tr><?php } ?>	   
</table><?php } ?>
