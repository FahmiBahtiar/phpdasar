
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari data mahasiswa /query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM daftarmobil");

// ambil data (fetch) mobil dari object result. Ada 4 cara
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() // mengembalikan array associative
//mysqli_fetch_array() // mengembalikan keduanya (double)
//mysqli_fetch_object() // mengembalikan object ->

//while ($mobil = mysqli_fetch_assoc($result)){
//	var_dump($mobil);
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mobil</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Merk</th>
		<th>Pendiri</th>
		<th>Tanggal Berdiri</th>
		<th>Jenis</th>
	</tr>

	<?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="image/<?php echo $row["gambar"] ?>" width="100"></td>
        <td><?php echo $row["merk"] ?></td>
        <td><?php echo $row["pendiri"] ?></td>
        <td><?php echo $row["tanggal_berdiri"] ?></td>
        <td><?php echo $row["jenis"] ?></td>
    </tr>
    <?php $i++; ?>
	<?php endwhile; ?>

</table>

</body>
</html>