<?php  
// superglobals
// variable global milik php
// merupakan array associative
// $_GET

$mahasiswa = [
	[
		"nama" => "Jenira Sekar",
		"nrp" => "123456",
		"email" => "skar4289@gmail.com",
		"jurusan" => "Teknik Informatika",
	],
	[
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
	<ul>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li>
			<a href="latihan2.php?nama"><?= $mhs["nama"];  ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
