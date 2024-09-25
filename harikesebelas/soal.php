<?php

//soal nomor 1
function pesan(){
    echo"akagami shanks";
    echo "<br>";
}
pesan();
pesan();

echo "<hr>";
//soal nomor 2
function tree($nama,$karakter,$judul){
    echo "$nama  $karakter $judul<br>";
}
tree("kaido","adalah kapten dari","the lord of the beasts");
tree("ace","dari bajak laut","whitebeard");

echo "<hr>";
//soal nomor 3
function nilai($nama,$umur=21){
    echo"nama kamu $nama, sudah berumur $umur";
    echo "<br>";
}
nilai("shanks",30);
nilai("ace");