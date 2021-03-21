/* Project Name: 6 task
    Create Date	: 21.03.21
    Autor: (C) Uskova Ekaterina, Chelyabinsk, 2021*/

<?php
//Определить значение функции Z=1/(XY) при X и Y не равных 0.
while( in_array(($x = rand(-100,100)), array(0))); //Исключаем 0 из случайных чисел
while( in_array(($y = rand(-100,100)), array(0)));
$Z=1/($x*$y);
echo "x= $x <br>"; //x= 53
echo "y= $y <br>"; //y= 59
echo "Z= ".$Z=round($Z,5); //Z= 0.00032
 ?>
