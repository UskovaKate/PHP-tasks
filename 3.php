/* Project Name: 3 task
    Create Date	: 20.03.21
    Autor: (C) Uskova Ekaterina, Chelyabinsk, 2021*/

<?php
//Известны длины трёх сторон треугольника. Вычислить периметр треугольника и площадь (указание: формула Герона), использовать модуль math и функцию sqrt ()).
$number=array("A"=>35,"B"=>45,"C"=>56);
echo "A= ".$number["A"].", B= ".$number["B"].", C= ".$number["C"]."<br><br>"; //Outputs A= 35, B= 45, C= 56
$p = ($number["A"] + $number["B"]+ $number["C"])/2;
$S = sqrt($p * ($p - $number["A"]) * ($p - $number["B"]) * ($p - $number["C"]));
echo "<b>Периметр=</b> ".$p*2 ."<br>"; //Outputs Периметр= 136
echo "<b>Площадь=</b> ".$S=round($S, 2); //Outputs Площадь= 786.98
 ?>
