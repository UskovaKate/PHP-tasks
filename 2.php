/* Project Name: 2 task
    Create Date	: 20.03.21
    Autor: (C) Uskova Ekaterina, Chelyabinsk, 2021*/

<?php
//Даны действительные числа А, В, С. Найти максимальное и минимальное из этих чисел.
$number=array("A"=>35,"B"=>45,"C"=>56);
echo "A= ".$number["A"].", B= ".$number["B"].", C= ".$number["C"]."<br><br>"; //Outputs A= 35, B= 45, C= 56
echo "<b>Max=</b> ".max($number)."<br>"; //Outputs 56
echo "<b>Min=</b> ".min($number); //Outputs 35
 ?>
