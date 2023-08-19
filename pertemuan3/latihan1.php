<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: gray;
        }
    </style>
</head>
<body>
	<table align="center" border="1" cellpadding="10" cellspacing="0"> 
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 1) : ?>
        <tr class="warna-baris"></tr>
        <?php else : ?>
            <tr>
        <?php endif; ?>
		    <tr>
                <?php for( $j = 1; $j <= 5; $j++ ) {  ?>
                <td><?= "$i, $j"; ?></td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
	</table>
</body>
</html>