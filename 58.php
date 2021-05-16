<?php
/*Задана строка символов, в которой встречается символ «.». Поставить после
каждого такого символа системное время ПК.*/
$arr=["afo.ioiefvjk.h","svv.aoua","ui.yd","dviug.di","qw.hs.uihswer"];
echo implode(", ", $arr)."<br><br>";

for ($i=0; $i!=count($arr); $i++){
    $t=str_replace(".",".".date("d/m/Y"),$arr[$i]);
    echo "$t<br>";
  }
 ?>
