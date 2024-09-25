
<html lang="en">
<head>
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>get dan post </title>
</head>
<body>
    <h1>mengirim data dengan method GET</h1>
    <a href="link1.php?nama=uzumaki">link 1</a>

<hr>
<h1>mengirim data dengan method POST</h1>
<form action="index.php?halaman=link2" method="post">
    <div class="mb-2">
    <input type="text" name="nama" id="nama" class="form-control">
</div>
<div class="mb-3">
    <label for="kelas" class="form-label">kelas</label>
    <select name="kelas"id="kelas" class="form-control">
        <option value="XI RPL 1">XI RPL 1</option> 
        <option value="XI RPL 2">XI RPL 2</option> 
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
</select>
</div>
<div class="mb-3"> 
<label for="jk" class="form-label">jenis kelamin</label>
<select name="jk"id="jk" class="form-control"> 
<option value="perempuan">perempuan</option> 
<option value="laki-laki">laki-laki</option> 
</select>
</div>
     <button type="submit">kirim</button>
</form>
</body>
</html>