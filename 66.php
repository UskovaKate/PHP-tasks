<?php
/*Для вводимых чисел определить процент положительных и отрицательных чисел.
При вводе числа −65432 закончить работу.*/
echo "Массив: &nbsp";
$x=range(-70,70);
shuffle($x);
$n=rand(3,10);
$arr=array_slice($x,0,$n);
echo implode(", &nbsp", $arr)."<br>";

$n=0;
$m=0;
for ($i=0;$i!=count($arr);$i++) {
  $t=$arr[$i];
  if ($t>=0) {
    $n+=1;
  }elseif($t==-65432) {
    break;
  }else
    $m+=1;
}

echo "% положительных чисел= ".round((100/count($arr))*$n,2)."<br>";
echo "% отрицательных чисел= ".round((100/count($arr))*$m,2);
 ?>
