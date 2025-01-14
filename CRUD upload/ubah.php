<?php

require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdsarkan id
$siswa = query("SELECT * FROM daftarsiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	// cek apakah data berhasil diubah atau tidak
	if(ubah($_POST) > 0){
		echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
	}else{
		echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>

<h1>Ubah data mahasiswa</h1>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $siswa["id"]; ?>">
	<input type="hidden" name="fotoLama" value="<?= $siswa["foto"];?>">
	<ul>
		<li>
			<label for="foto">Foto : </label>
			<img src="image/<?= $siswa['foto']; ?>" width ="40"> <br>
			<input type="file" name="foto" id="foto">
		</li>
		<br>
		<li>
			<label for="nis">NIS : </label>
			<input type="text" name="nis" id="nis" required value="<?php echo $siswa["nis"]; ?>  ">
		</li>
		<br>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" required value="<?php echo $siswa["nama"]; ?>  ">
		</li>
		<br>
		<li>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" id="alamat" required value="<?php echo $siswa["alamat"]; ?>  ">
		</li>
		<br>
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email" required value="<?php echo $siswa["email"]; ?> ">
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
			<button type="submit" name="submit">Ubah data</button>
		</li>
	</ul>
</form>

</body>
</html>