<?php

require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
	    echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah data mahasiswa</h1>

<form action="" method="post">
	<ul>
		<li>
            <label for="foto">Foto : </label>
            <input type="text" name="foto" id="foto" required>
        </li>
        <br>
		<li>
            <label for="nis">NIS : </label>
            <input type="text" name="nis" id="nis" required>
        </li>
        <br>
		<li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <br>
		<li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" required>
        </li>
        <br>
		<li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required>
        </li>
        <br>
		<li>
            <label for="jurusan">Jurusan : </label>
            <select name="jurusan" id="jurusan">
                <option>Rekayasa Perangkat Lunak</option>
                <option>Desain Komunikasi Visual</option>
                <option>Animasi</option>
                <option>Desain Grafika</option>
                <option>Produksi Grafika</option>
            </select>
        </li>
        <br>
		<li>
            <label for="agama">Agama : </label>
            <select name="agama" id="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select>
        </li>
        <br>
		<li>
            <button type="submit" name="submit">Tambah data</button>
        </li>
	</ul>
</form>

</body>
</html>