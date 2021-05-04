<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
После каждого отрицательного элемента вставить новый элемент, равный
квадрату этого отрицательного элемента.*/
echo "Массив: &nbsp";
$x=range(-70,70);
shuffle($x);
$n=rand(3,10);
$arr=array_slice($x,0,$n);
echo implode(", &nbsp", $arr)."<br>";

$new=[];
for ($i=0;$i<=count($arr)-1;$i++){
    array_push($new, $arr[$i]);
    if ($arr[$i] < 0){
        array_push($new, $arr[$i]**2);
    }
}
print_r($new);
 ?>
