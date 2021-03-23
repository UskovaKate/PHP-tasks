<?php
/*Дано вещественное число A. Вычислить f(A), если f(x) = 0 при x ≤ 0;
f(x) = x2 − x при 0 < x < 1, в противном случае f(x) = x2 − sin(πx2).*/
$A=rand(-100,100);
echo "<b>A= $A</b><br>";
if ($A<=0){
  $f=0;
  echo "f(A)= $f, при x≤0";
}
elseif (0<$A and $A<1){
  $f=($A**2)-x;
  echo "f(A)=(x^2)-x= $f, при 0<x<1";
}
else {
  $sin=sin(pi()*$A**2);
  $f=$A**-$sin;
  echo "f(A)=(x^2)−sin(πx2)= ".$f=round($f,2);
}
 ?>
