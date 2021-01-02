<?php

require 'functions.php';

$siswa = query("SELECT * FROM daftarsiswa");

// tombol cari ditekan
if (isset($_POST["cari"])){
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah data siswa</a>

<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Foto</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Agama</th>
		<th>Aksi</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ($siswa as $row): ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><img src="image/<?php echo $row["foto"] ?>" width="100"></td>
        <td><?php echo $row["nis"] ?></td>
        <td><?php echo $row["nama"] ?></td>
        <td><?php echo $row["alamat"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["jurusan"] ?></td>
        <td><?php echo $row["agama"] ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $row["id"] ?>">ubah</a> |
            <a href="hapus.php?id= <?php echo $row["id"] ?>"
                onclick="return confirm('yakin?')">hapus</a>
        </td>
    </tr>
		<?php $i++; ?>
	<?php endforeach; ?>

</table>

</body>
</html>