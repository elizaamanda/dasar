<?php

$jumlahjamkerja=47;
$jamlembur=$jumlahjamkerja=48;

if($jumlahjamkerja <=0){
    $upah="tidak ada upah";
}
elseif($jamlembur >0){
    $upah=(3000*$jumlahjamkerja)+(2000*48);
}
else{
    $upah=(2000*$jumlahjamkerja);
}

echo "$upah <hr>";