<?php  
$mahasiswa = [
	["Jenira Sekar", "124467", "Rekayasa Perangkat Lunak", "jenirasekarazzahra@gmail.com"],
	["Jenira Sekar", "124467", "Rekayasa Perangkat Lunak", "jenirasekarazzahra@gmail.com"],
	["Jenira Sekar", "124467", "Rekayasa Perangkat Lunak", "jenirasekarazzahra@gmail.com"],
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<body>
	<h1 align="center">Daftar Siswa</h1>
	<?php foreach ($mahasiswa as $mhs ) : ?>
	<ul>
		<li><?= $mhs[0]; ?></li>
		<li><?= $mhs[1]; ?></li>
		<li><?= $mhs[2]; ?></li>
		<li><?= $mhs[3]; ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>