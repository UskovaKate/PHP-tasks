<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Добавить к элементам массива такой новый элемент, чтобы сумма элементов
с положительными значениями стала бы равна модулю суммы элементов с
отрицательными значениями.*/
echo "Массив: &nbsp";
$x=range(-70,70);
shuffle($x);
$n=rand(3,10);
$arr=array_slice($x,0,$n);
echo implode(", &nbsp", $arr)."<br>";

$sum_plus=0;
$sum_minus=0;
for ($i=0;$i<=count($arr)-1;$i++) {
   if ($arr[$i]>0) {
     $sum_plus=$sum_plus+$arr[$i];
   }else {
     $sum_minus=$sum_minus+$arr[$i];
   }
}
echo "Сумма полож. элементов: $sum_plus <br>";
echo "Сумма отриц. элементов: $sum_minus <br>";

while ($sum_plus!=$sum_minus) {
  if ($sum_plus>$sum_minus) {
    array_push($arr,-$sum_minus+$sum_plus);
    break;
  }else{
    array_push($arr,$sum_plus-$sum_minus);
    break;
  }
}
echo implode(", &nbsp", $arr);
 ?>
