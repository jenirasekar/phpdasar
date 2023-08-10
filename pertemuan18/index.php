<?php
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query($conn, "SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 0, $jumlahDataPerHalaman");

// tombol cari ditekan
if (isset($_POST['cari'])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>

<body>
	<a href="logout.php">Logout</a>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>
	<form action="" method="post">
		<input type="text" name="keyword">
		<button type="submit" name="cari" size="35" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">Cari!</button>
	</form>
	<br>
	<!-- navigasi -->

	<?php if ($halAktif > 1) : ?>
		<a href="?halaman=<?= $halAktif - 1; ?>">&laquo;</a>
	<?php endif; ?>

	<?php for ($i = 1; $i < $jumlahHalaman; $i++) : ?>
		<?php if ($i == $halAktif) : ?>
			<a href="?page=<?= $i; ?>" style="font-weight:bold;"><?= $i; ?></a>
		<? else : ?>
			<a href="?page=<?= $i; ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if ($halAktif < $jumlahHalaman) : ?>
		<a href="?halaman=<?= $halAktif + 1; ?>">&raquo;</a>
	<?php endif; ?>
	<br>



	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar </th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
				</td>
				<td><img src="<?= 'img/' . $row['gambar'] ?>" width="50" alt="Foto Profil Mahasiswa"></td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["nrp"]  ?></td>
				<td><?= $row["email"] ?></td>
				<td><?= $row["jurusan"] ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>

</html>