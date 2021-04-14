<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Поменять местами первую и вторую половины массива.*/
echo "Массив: &nbsp";
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$x=$array[count($array)-1];
$y=array_slice($array,0,$x/2);
$z=array_slice($array,$x/2);
$M=array_merge($z,$y);
echo implode(", &nbsp", $M);
 ?>
