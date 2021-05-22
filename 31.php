<?php
//Нарисуйте полную блок-схему алгоритма сортировки массива «методом пузырька».
$array = [rand (-10,10),rand (-10,10),rand (-10,10),rand (-10,10),rand (-10,10),rand (-10,10)];
print_r ($array);
echo"<br>";
// перебираем массив
for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($array[$i] > $array[$i + 1]){
            // меняем местами элементы
            $tmp_var = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp_var;
        }
    }
}
print_r ($array);
 ?>
