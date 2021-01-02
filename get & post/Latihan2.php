
<?php

// cek apakah tidak ada data di $_GET
if(!isset($_GET["gambar"]) || !isset($_GET["merk"]) || !isset($_GET["pendiri"]) || !isset($_GET["didirikan"]) || !isset($_GET["jenis"])){
    // redirect
    header("Location: Latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mobil</title>
</head>
<body>

<ul>
	<li><img src="image/<?php echo $_GET["gambar"] ?>"></li>
    <li><?php echo $_GET["merk"] ?></li>
    <li><?php echo $_GET["pendiri"] ?></li>
    <li><?php echo $_GET["didirikan"] ?></li>
    <li><?php echo $_GET["jenis"] ?></li>
</ul>

<a type="button" href="Latihan1.php">back</a>

</body>
</html>