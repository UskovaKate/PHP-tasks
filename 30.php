<?php
//Составьте блок-схему поиска максимального элемента в одномерном массиве.
echo "Массив: &nbsp";
$x=array(rand(-100,100),rand(-100,100),rand(-100,100),rand(-100,100),rand(-100,100));
foreach ($x as $key) {
    echo $key."&nbsp&nbsp";
}
echo "<br><b>Max элемент</b>= ".max($x);
 ?>
