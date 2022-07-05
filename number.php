<?php
$d=3498;//متغیر تعریف کردم
var_dump(is_int($d));//گفتم چک کنه ببینه متغیرم عدد صحیحه
echo"<br>";//رفتم خط بعد
$x=23.45;//متغیر تعریف کردم
var_dump(is_int($x));//گفتم چک کنه ببینه متغیرم عدد صحیحه
//next cod 

$b =10.56;//متغیر تعریف کردم
var_dump(is_float($b));//گفتم چک کنه ببینه متغیرم اعشاریه 

//next cod 

$t=30.40;
var_dump($t);

//next cod 
$k=acos(8)
var_dump($k)

//next cod 

$x=24
var_dump(is_numeric($x));
$c=25+30
var_dump(is_numeric($c))
$v=volvo
var_dump(is_numeric($v));


//next cod 


$bn=12.40;
$int_cast =(int)$bn;
echo $int_cast;

echo "<br>";

$dk=("5674.587");
$int_cast = (int)$dk;
echo $int_cast;
?>