<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Исключить из массива элементы, принадлежащие промежутку [B; C].*/
echo "Массив:  ";
$arr = [1,2,3,4,5,6,7,8,9,10,12,13,14,15];
echo implode(",  ", $arr)."<br>";

$B=rand(1,7);
$C=rand(1,7);
echo "B= $B <br> C= $C <br>";

if ($B<$C) {
  array_splice($arr,$B-1,($C-$B)+1);
}else {
  array_splice($arr,$C-1,($B-$C)+1);
}

echo implode(",  ", $arr);
 ?>
