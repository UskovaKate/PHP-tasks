/* Project Name: 12 task
    Create Date	: 21.03.21
    Autor: (C) Uskova Ekaterina, Chelyabinsk, 2021*/
    
<?php
//Дано вещественное число. Определить, какое это число: положительное, отрицательное, ноль.
$x=rand(-1000,1000);
echo "Число: $x <br>";
if ($x>0)
echo "<i>Число положительное</i><br>";
if ($x<0)
echo "<i>Число отрицательное</i><br>";
if($x==0)
echo "<i>Число равно нулю</i>";
 ?>
