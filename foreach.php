<?php
$x=array("bmv","bmw","touota","jeep");//یک متغیر تعریف کردم 

foreach ($x as $z){//گفتم همه ی مقدار ها رو وارد اون یکی متغیر کنه
echo "$z  <br>"//اون یکی متغیر رو جداجدا چاپ کنه
}

//next cod

$age= array("javad"=>"34","mahde"=>"40","Amir"=>"13");
foreach($age as $w => $e){//گفتم مغادیر رو توی دوتا متغیر بریزه بعد اونا رو کنار هم چاپ کنه
    echo "$w=$e <br>";
}

//end cod
?>