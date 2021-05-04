<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Поменять местами группу из M элементов, начинающихся с позиции K с
группой из M элементов, начинающихся с позиции P.*/
$M=rand(1,5);
$P=rand(5,10);
$K=rand(1,5);
echo "M= $M<br> P= $P<br> K= $K<br>";
echo "<b>Массив: </b>&nbsp";
$arr=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
echo implode(", &nbsp", $arr); //Выводим массив
echo "<br>";

$d=$arr[count($arr)-1];
$a=array_slice($arr,0,$K); //с 0 до К
$b=array_slice($arr,$K,$K+$M-1); //до K+M
$a1=array_slice($arr,$K+$M,$P-$K-$M); //до P
$c=array_slice($arr,$P,$M); //до P+M
$a2=array_slice($arr,($P+$M),$d); //с P+M до d

$F=array_merge($a,$c,$a1,$b,$a2);
echo implode(", ",$F);
 ?>
