<?php

$nama="eliza";
echo "$nama<br>";

$angka1="10";
$angka2="5";

$hasil=($angka1*$angka2);
echo $hasil;


//rumus tabung
$pi=3.14;
$r=20;
$t=17;
$hasil = $pi*$r*$r*$t;
echo "<br>volume tabung = $hasil</br>";
?>
<br>

<!-- form halaman login -->
<!DOCTYPE html>
<html lang="en">
<head>
<form action="data.php" method="get">
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>form login</title>
<label for="nama" class="form-label">nama</label>
<input type="text" name="nama" id="nama">
<label for="nisn" class="form-label">nisn</label>
<input type="text" name="nisn" id="nisn">
<button type="submit">kirim</button>

</form>
</head>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<title>form login</title>
</head>
<body>
    <a href="data.php?jari=7&tinggi=10">data</a>
<form action="data.php" method="get">
<label for="r">R:</label>
<input type="number" id="R" name="R">

<label for="t">T:</label>
<input type="number" id="T" name="T" >
<input type="submit">kirim</button>

</form>
</body>
</html>