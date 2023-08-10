<?php  
function salam($time, $nama) {
	return "Selamat Datang, $time $nama";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Fungsi</title>
</head>
<body>
	<h1><?= salam("Pagi", "Sekar"); ?></h1>
</body>
</html>