<?php

function salam($waktu = "datang", $nama = "Admin"){
	return "Happy $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?php echo salam(date("l"), "Ilham"); ?></h1>
</body>
</html>
