<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Исключить из него M элементов, начиная с позиции K*/
echo "Массив: &nbsp";
$x=range(-70,70);
shuffle($x);
$n=rand(10,15);
$arr=array_slice($x,0,$n);
echo implode(", &nbsp", $arr)."<br>";

$M=rand(1,5);
$K=rand(0,10);
echo "С позиции K= $K ";
echo "исключить M= $M<br><br>";

array_splice($arr,$K,$M);//исключаем элементы из массива
print_r($arr);
 ?>
