<?php
/*Заданы M строк символов, которые вводятся с клавиатуры. Каждая строка
содержит слово. Записать каждое слово в разрядку (вставить по пробелу между
буквами).*/
$arr=["afoioiefvjkh","svvaoua","uiyd","dviugdi","qwhsuihswer"];
echo implode(", ", $arr)."<br>";

for ($i=0; $i!=count($arr); $i++){
  $t=$arr[$i];
  $x=0;
  $k=" ";
  while ($x!=strlen($t)) {
    $k=$k.$t[$x]." ";
    $x+=1;
  }
echo "$k<br>";
}
 ?>
