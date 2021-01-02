<?php

//$mahasiswa = [
//	["Ilham", "11111", "RPL", "ilham@gmail.com"],
//	["Fahmi", "22222", "RPL", "fahmi@gmail.com"],
//	["Afif", "33333", "RPL", "afif@gmail.com"]
//]

//Array Associative
//key string yang kita buat sendriri

$mobil = [
	[
		"merk"=>"Ferrari",
		"pendiri"=>"Enzo Ferrari",
		"didirikan"=>"1947, Maranello, Italia",
		"jenis"=>"Divisi dari Fiat",
        "gambar"=>"ferrari.jpeg"
	],
	[
		"merk"=>"Lamborghini",
		"pendiri"=>"Ferruccio Lamborghini",
		"didirikan"=>"Mei 1963, Sant'Agata Bolognese, Italia",
		"jenis"=>"Divisi penuh dari Volkswagen AG",
		"gambar"=>"lamborghini.jpeg"
	],
	[
		"merk"=>"BMW",
		"pendiri"=>"Karl Rapp",
		"didirikan"=>"7 Maret 1916, München, Jerman",
		"jenis"=>"Perusahaan publik",
		"gambar"=>"bmw.jpeg"
	],
	[
		"merk"=>"McLaren",
		"pendiri"=>"Ron Dennis",
		"didirikan"=>"2 Desember 1985, Woking, Britania Raya",
		"jenis"=>"Perusahaan publik",
		"gambar"=>"mclaren.jpeg"
	],
	[
		"merk"=>"Rolls Royce",
		"pendiri"=>"Charles Rolls, Henry Royce",
		"didirikan"=>"Februari 2011, Manchester, Britania Raya",
		"jenis"=>"Perusahaan publik",
		"gambar"=>"rollroyce.jpeg"
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mobil</title>
</head>
<body>

<h1>Daftar Mobil</h1>

<ul>
	<?php foreach ($mobil as $mbl): ?>
        <li>
            <img src="image/<?php echo $mbl["gambar"]; ?>">
        </li>
		<li>Merk : <?php echo $mbl["merk"]; ?> </li>
		<li>Pendiri : <?php echo $mbl["pendiri"]; ?> </li>
		<li>Didirikan : <?php echo $mbl["didirikan"]; ?> </li>
		<li>Jenis : <?php echo $mbl["jenis"]; ?> </li>
		<br>
	<?php endforeach; ?>
</ul>

</body>
</html>
