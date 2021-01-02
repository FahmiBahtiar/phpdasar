<?php

$mahasiswa = [
	["Ilham", "11111", "RPL", "ilham@gmail.com"],
	["Fahmi", "22222", "RPL", "fahmi@gmail.com"],
	["Afif", "33333", "RPL", "afif@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<ul>
	<?php foreach ($mahasiswa as $mhs): ?>
		<li>Nama : <?php echo $mhs[0] ?> </li>
		<li>NISN : <?php echo $mhs[1] ?> </li>
		<li>Jurusan : <?php echo $mhs[2] ?> </li>
		<li>Email : <?php echo $mhs[3] ?> </li>
		<br>
	<?php endforeach; ?>
</ul>

</body>
</html>