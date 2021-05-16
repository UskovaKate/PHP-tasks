<?php
/*Заданы M строк, которые вводятся с клавиатуры. Подсчитать количество пробелов
в каждой из строк.*/
$arr=["afo ioiefvjk h","svv ao u a","uiyd","dviu gdi","qw hs u i h s wer"];
echo implode(", ", $arr)."<br><br>";

for ($i=0;$i!=count($arr);$i++) {
  $t=substr_count($arr[$i], " ");
  echo "Кол-во пробелов: $t<br>";
}
 ?>
