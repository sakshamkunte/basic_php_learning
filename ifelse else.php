<?php 
$per = 99.9;

if($per >= 80 && $per <=100):
    echo "you are Merit Rank";
elseif($per >=60 && $per <=80):
    echo "you are Ist divison";
elseif($per >=45 && $per <=59):
    echo "you are IInd divison";
elseif($per >=33 && $per <=44):
    echo "you are IIIrd divison";
elseif($per < 33):
    echo "you are fail";
else:
    echo "please enter valid percentage";
endif;


?>
