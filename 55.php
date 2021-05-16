<?php
/*Заданы M строк слов, которые вводятся с клавиатуры
(в каждой строке – одно слово). Вводится слог (последовательность букв).
Удалить данный слог из каждой строки.*/
$x="wfblololo dfvljlo dsclolojglooololoq";
echo "$x <br>";
$q="lo";
echo "$q<br><br>";

while(strpos($x,$q) !==false){
  $x=str_replace($q,"",$x);
}
echo $x;
 ?>
