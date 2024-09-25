<?php

//perulangan --> Loping
//inisialisasi variabel perulangan; kondisi perulangan;penjumlahan/prngurangan
echo "<h3>pengulangan for<h3>";
for ($i=0;$i<=3;$i++){
    echo "ini perulangan ke-$i<br>";
}
echo "<hr>";
echo "<h3>pengulangan while<h3>";
$a=0;
while($a<=3){
    echo "ini pengulangan ke=$a <br>";
    $a++;
}
echo "<h3>pengulangan i<h3>";
for($i=5;$i>=1;$i--){
    //echo "perulangan i ke-$i";
    for($k=1;$k<=$i;$k++){
        echo "*";
    }
    echo "<br>";
}
while($a<=3){
    echo "ini pengulangan ke=$a <br>";
    $a++;
}
