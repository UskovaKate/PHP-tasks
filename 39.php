<?php
/*Дан одномерный массив числовых значений, насчитывающий N
элементов. Исключить все нулевые элементы.*/
echo "Массив: &nbsp";
$arr=[1,2,0,4,5,6,0,8,0,10,11,0,13,0,15];
echo implode(", &nbsp", $arr)."<br>";
$F=array_filter($arr);
print_r($F);
 ?>
