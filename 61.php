<?php
/*Последовательно вводятся числа. Определить сумму чисел с нечётными номерами и
произведение чисел с чётными номерами (по порядку ввода). Подсчитать количество
слагаемых и количество сомножителей. При вводе числа 55555 закончить работу.*/
$arr=["12","3","780","13","8","9","55555"];
echo implode(", ", $arr)."<br><br>";

$a=1;
$b=0;
$n=0;
$m=0;

for ($i=0;$i!=count($arr);$i++) {
  if ($arr[$i]==55555) {
    break;
  }
  if ($i%2 ==0) {
    $a*=$arr[$i];
    $n+=1;
  }
  else {
    $b+=$arr[$i];
    $m+=1;
  }
}
echo "Сумма чисел с нечетными номерами= $b<br>";
echo "Кол-во слагаемых: $m<br><br>";
echo "Произведение чисел с четными номерами= $a<br>";
echo "Количество сомножителей: $n<br>";
 ?>
