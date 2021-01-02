<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	// ambil data dari tiap elemen dalam form

	// upload gambar
	$foto = upload();
	if (!$foto){
		return false;
	}


	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$agama = htmlspecialchars($data["agama"]);

	//query instert data
	$query = "INSERT INTO daftarsiswa (foto, nis, nama, alamat, email, jurusan, agama)
        VALUES ('$foto', '$nis', '$nama', '$alamat', '$email', '$jurusan', '$agama')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	// cek apakah tidak ada foto yang diupload
	if ($error === 4){
		echo "
			<script>
				alert('pilih gambar terlebih dahulu')
			</script>
		";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
	$ekstensiFoto = explode('.', $namaFile);
	$ekstensiFoto = strtolower(end($ekstensiFoto));
	if (!in_array($ekstensiFoto, $ekstensiFotoValid)){
		echo "
			<script>
				alert('yang anda upload bukan gambar')
			</script>
		";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){
		echo "
			<script>
				alert('ukuran foto terlalu besar')
			</script>
		";
		return false;
	}

	// lolos pengecekan foto siap diupload
	$folder = 'image/'.$namaFile;
	move_uploaded_file($tmpName, $folder);

	return $namaFile;

}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM daftarsiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	// ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$foto = htmlspecialchars($data["foto"]);
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$agama = htmlspecialchars($data["agama"]);

	//query instert data
	$query = "UPDATE daftarsiswa SET 
                       foto='$foto', nis='$nis', nama='$nama', alamat='$alamat', email='$email', jurusan='$jurusan', agama='$agama' 
					WHERE id = $id ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	// untuk dari baru ke lama ASC
	// dari lama ke baru DESC
	$query = "SELECT * FROM daftarsiswa WHERE nis LIKE '%$keyword%' OR
											  nama LIKE '%$keyword%' OR
											  alamat LIKE '%$keyword%' OR
											  email LIKE '%$keyword%' OR
											  jurusan LIKE '%$keyword%' OR
											  agama LIKE '%$keyword%'
											  ";
	return query($query);
}

?>
