<?php

function cetak($nama){
echo "Selamat Datang ".$nama;
echo "<br>";
}
cetak("Andi");
cetak("budi");

echo "<hr>";
function ageCount($nama,$tahun){
$umur=date("Y")-$tahun;
echo "Hai $nama, umur kamu $umur tahun <br>";
}
ageCount("Andi",2009);
ageCount("Budi",2002);

echo "<hr>";
function jumlahkan($bil1,$bil2){
return $bil1+$bil2;
}
echo jumlahkan(100,50)."<br>";
echo jumlahkan(80,9)."<br>";
$jum=jumlahkan(800,4);
echo $jum;

echo "<hr>";
function nilaibalik(){
    return"kacamata";
}

echo nilaibalik();
    
echo "<hr>";
