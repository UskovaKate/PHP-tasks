<?php
/*Заданы M строк слов, которые вводятся с клавиатуры. Подсчитать количество
гласных букв в каждой из заданных строк.*/
$arr1="вапшщйц";
$arr2="тпкпгнф";
$arr3="аафаацйеёюямг";

$patt="~(?<vowels>[аеёиоуыэюя])~iu";
preg_match_all($patt,$arr1,$a1); //ищем соответствие
preg_match_all($patt,$arr2,$a2);
preg_match_all($patt,$arr3,$a3);

$vowels1=count(array_filter($a1["vowels"])); //считаем гласные
$vowels2=count(array_filter($a2["vowels"]));
$vowels3=count(array_filter($a3["vowels"]));

echo "<b>$arr1</b> Гласных букв: $vowels1<br>";
echo "<b>$arr2</b> Гласных букв: $vowels2<br>";
echo "<b>$arr3</b> Гласных букв: $vowels3<br>";
 ?>
