<?php
/*Даны вещественные числа X и Y . Вычислить Z. Z = √(X x Y) при X > Y,
Z = ln(X + Y ) в противном случае.*/
$X=rand(0,100);
$Y=rand(0,100);
echo "<ins>Даны вещественные числа: </ins><br> X= $X <br> Y= $Y<br><br>";
if ($X>$Y){
$Z=sqrt($X*$Y);
echo "Z=√(X*Y)= ".$Z=round($Z,2).", условие X>Y выполняется";
}
else {
  $Z=log($X+$Y);
  echo "В остальных случаях: Z=Ln(X+Y)= ".$Z=round($Z,2);
}
 ?>
