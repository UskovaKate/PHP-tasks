/* Project Name: 5 task
    Create Date	: 20.03.21
    Autor: (C) Uskova Ekaterina, Chelyabinsk, 2021*/

<?php
//Известен объем информации в байтах. Перевести в килобайты, мегабайты.
$B=15379;
$x=1024;
$kb=$B/$x;
$mb=$kb/$x;
echo "<b>Байты: </b> $B <br>"; //Байты: 15379
echo "<b>Килобайты: </b>".$kb=round($kb,3)."<br>"; //Килобайты: 15.019
echo "<b>Мегабайты: </b>". $mb=round($mb,3); //Мегабайты: 0.015
 ?>
