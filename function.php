<?php
function famlyname($f_n){//ازش واستم چند تا اسم رو با پس وند چاپ کنه
    echo "$f_n jafare ". "<br>";   
}
famlyname(amir);
famlyname(amirali);
famlyname(mahdi);
famlyname(zahra);


function familyName($fname, $year){//ازش خواستم چن تا اسم رو با سنشون چاپ کنه
    echo "$fname is $year years old","<br>";
}
familyName("amir" ,13);
familyName("mahdi"40);
familyName("zahra"36);
familyName("amirali"8);



function a-n($k , $o) {//ازش خواستم دوتا عدد صحیح رو باهم جمع کنه
    return $o + $k;
}

echo addNumbers (10 , 29);



function sum(int $x, int $y) {ازش خواستم جواب جمع رو ریترن کنه
    $z = $x + $y;
    return $z;
  }
  echo"6+7=" . sum (6,7).<br>;
  echo "5+4". sum (5,4).<br>;
  echo "10+78" . sum (10 , 78);

  function add_five(&$value) { //ازش خواستم متغیرم رو +5 کنه
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

  ?>