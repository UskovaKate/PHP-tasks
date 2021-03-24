<?php
//Составьте блок-схему поиска максимального элемента в одномерном массиве.
echo "Массив: &nbsp";
$x = range(-100,100);
shuffle($x);
$n=rand(1,10);
$y=array_slice($x,0,$n);
echo implode(", &nbsp", $y);
echo "<br><b>Max элемент</b>= ".max($y)."<br>";
?>
