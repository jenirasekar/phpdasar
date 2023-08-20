<?php  
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dar/i objek result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array()
// mysqli_fetch_object()

// while($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	// upload gambar
	$gambar = upload();
	if (!$gambar == false) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('', '$nama', '$nrp', '$email', '$jurusan',
				'$gambar' ) 
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu')
				</script>";
		return false;
	}
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE mahasiswa SET 
				nama = $nama,
				nrp = $nrp,
				email = $email,
				jurusan = $jurusan,
				gambar = $gambar
			WHERE id_mahasiswa = $id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function cari($keyword) {
	$query = "SELECT FROM * mahasiswa WHERE
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%'
				";
	return query($query);
}
?>