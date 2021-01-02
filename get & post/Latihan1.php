<?php

// $_GET
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
	<title>GET</title>
</head>
<body>

<h1>Daftar Mobil</h1>

<ul>
	<?php foreach ($mobil as $mbl): ?>
		<li>
			<a href="Latihan2.php?gambar=<?php echo $mbl["gambar"] ?> & merk=<?php echo $mbl["merk"] ?>
			& pendiri=<?php echo $mbl["pendiri"] ?> & didirikan=<?php echo $mbl["didirikan"] ?>
			& jenis=<?php echo $mbl["jenis"] ?> "> <?php echo $mbl["merk"]; ?> </a>
		</li>
		<br>
	<?php endforeach; ?>
</ul>

</body>
</html>