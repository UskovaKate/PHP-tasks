<?php
/*Заданы M строк символов, которые вводятся с клавиатуры. Найти количество
символов в самой длинной строке. Выровнять строки по самой длинной строке,
поставив перед каждой строкой соответствующее количество звёздочек.*/
$a1="afoioiefvjkh";
$b1=strlen($a1);
$a2="svaoua";
$b2=strlen($a2);
$a3="uyd";
$b3=strlen($a3);
echo "$a1<br> $a2<br> $a3<br><br>";

$max=max($b1,$b2,$b3);

if ($b1!=$max){
    $t=str_repeat('*',$max-$b1);
    $a1=$a1.$t;
}
if ($b2!=$max){
    $t=str_repeat('*',$max-$b2);
    $a2=$a2.$t;
}
if ($b3!=$max){
    $t=str_repeat('*',$max-$b3);
    $a3=$a3.$t;
}
echo $a1, '<br>', $a2, '<br>', $a3;
 ?>