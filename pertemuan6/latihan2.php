<?php  
// $mahasiswa = [["Jenira Sekar", "123456", "skar4289@gmail.com", "Teknik Informasi"],
// 	["Rina Agustisya", "123457", "ngikngok@gmail.com", "Teknik Informasi"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" = "Jenira Sekar";
		"nrp" = "123456";
		"email" = "skar4289@gmail.com";
		"jurusan" = "Teknik Informatika";
	],
	[
		"nama" = "Rina Agustisya";
		"nrp" = "123457";
		"email" = "gakdaemail@gmail.com";
		"jurusan" = "Teknik Informatika";
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"] ?>">
			</li>
			<li>Nama : <?= $mhs["nama"] ?></li>
			<li>Nama : <?= $mhs["nrp"] ?></li>
			<li>Nama : <?= $mhs["email"] ?></li>
			<li>Nama : <?= $mhs["jurusan"] ?></li>
		</ul>
		<?php endforach; ?>
</body>
</html>