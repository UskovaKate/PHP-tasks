<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Добавить столько элементов, чтобы элементов с положительными и отрицательными
значениями стало бы поровну.*/
echo "Массив: &nbsp";
$x=range(-70,70);
shuffle($x);
$n=rand(3,10);
$arr=array_slice($x,0,$n);
echo implode(", &nbsp", $arr)."<br>";

$plus=0;
$minus=0;
for ($i=0;$i<=count($arr)-1;$i++) {
   if ($arr[$i]>0) {
     $plus++;
   }else {
     $minus++;
   }
}
echo "Всего чисел с плюсом: $plus <br>";
echo "Всего чисел с минусом: $minus <br>";

while ($plus!=$minus) {
  if ($plus>$minus) {
    array_push($arr,rand(-100,-1));
    $minus++;
  }else{
    array_push($arr,rand(1,100));
    $plus++;
  }
}
echo implode(", &nbsp", $arr);
 ?>
