<?php

//index array
$nama=array("andi","budi","candra","dedi","emon");
echo $nama[2];//mengakses elemen 3 dimulai dari 0

echo "<hr>";
//menampilkan semua data
$nama=array("andi","budi","candra","dedi","emon");
foreach($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
//mengubah elemen atau data
$nama[4]="zoro";
foreach($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
//menhapus data array
$nama=array("andi","budi","candra","dedi","emon");
unset($nama[1]);//menghapus data arrayindeks-1
foreach($nama as $n){
    echo $n.'<br>';
}

echo "<hr>";
//associative array
$car = array("brand"=>"lamborghini","model"=>"avedator","year"=>1964);

//memanggil dengan label
echo $car["model"];
echo "<br>";
//mengubah elemen atau data
echo $car["yaer"]=2024;

echo "<hr>";
//menambah array
$car = array("ferari","mercedes","range rover");
$car[]="orange";
foreach($nama as $n){
    echo $n.'<br>';
}