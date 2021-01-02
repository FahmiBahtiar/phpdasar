
<?php
require 'functions.php';
$mobil = query("SELECT * FROM daftarmobil");

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
	<?php foreach ($mobil as $row): ?>
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
	<?php endforeach; ?>

</table>

</body>
</html>