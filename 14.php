<?php
/*Можно ли в квадратном зале площадью S поместить круглую сцену радиусом R
так, чтобы от стены до сцены был проход не менее K?*/
$S=rand(30,150);
$R=rand(1,50);
$K=rand(1,10);
echo "Площадь зала(S)= $S<br>";
echo "Радиус сцены(R)= $R<br>";
echo "Проход от стены до сцены(K)= $K<br><br>";
if ($S-$K>$R)
echo "<b>В зале можно поставить сцену</b><br>";
if ($S-$K<=$R)
echo "<b>В зале поставить сцену нельзя</b>";
 ?>