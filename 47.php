<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Исключить из массива элементы, принадлежащие промежутку [B; C].*/
echo "Массив:  ";
$x=range(-70,70);
shuffle($x);
$n=rand(10,15);
$arr=array_slice($x,0,$n);
echo implode(",  ", $arr)."<br>";

$B=rand(-50,50);
$C=rand(-30,30);
echo "С позиции K= $B ";
echo "исключить M= $C<br><br>";

int i = 0, j = i;
for (; i < n; i++)
{
    if (arr[i] < a || arr[i] > b)
        arr[i - j] = arr[i];
    else
        j++;
}
for (i = n - j; i < n; i++)
    arr[i] = 0;
    
$arr2=[$B,$C];
print_r($arr2);
echo "<br>";
array_splice($arr,$B,($C-$B));

print_r($arr);
 ?>
