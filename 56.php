<?php
/*Заданы M строк символов, которые вводятся с клавиатуры. Напечатать все
центральные буквы строк нечетной длины.*/
$arr=["afoioiefvjkh","svvaoua","uiyd","dviugdi","qwhsuihswer"];
for ($i=0; $i!=count($arr); $i++){
    $t=$arr[$i];
    if (strlen($t)%2 ==1){
        echo $t." - ". $t[(int)floor(strlen($t)/2)]."<br>";
    }else{
        echo "$t кол-во символов чётное<br>";
    }
}
 ?>
