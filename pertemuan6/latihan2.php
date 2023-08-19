<?php
// $mahasiswa = [["Jenira Sekar", "123456", "skar4289@gmail.com", "Teknik Informasi"],
// 	["Rina Agustisya", "123457", "ngikngok@gmail.com", "Teknik Informasi"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"gambar" => "logo smk.jpg",
		"nama" => "Jenira Sekar",
		"nrp" => "123456",
		"email" => "skar4289@gmail.com",
		"jurusan" => "Teknik Informatika",
	],
	[
		"gambar" => "logo smk.jpg",
		"nama" => "Rina Agustisya",
		"nrp" => "123457",
		"email" => "gakdaemail@gmail.com",
		"jurusan" => "Teknik Informatika",
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
				<img src="img/<?= $mhs['gambar'] ?>" style="width: 100px;">
			</li>
			<li>Nama : <?= $mhs["nama"] ?></li>
			<li>NRP : <?= $mhs["nrp"] ?></li>
			<li>Email : <?= $mhs["email"] ?></li>
			<li>Jurusan : <?= $mhs["jurusan"] ?></li>
		</ul>
	<?php endforeach; ?>
</body>

</html>