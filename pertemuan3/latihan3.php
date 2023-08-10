<!DOCTYPE html>
<html>
<head>
<title>Latihan 3</title>
<style type="css"></style>
</head>
<body>
    <table border="1" align="center" width="60%" height="100%">
    <?php for( $i = 1; $i <= 10; $i++ ); ?>
    <?php if( $i % 2 == 1 ) : ?>
        <tr bgcolor= "green"></tr>
        <?php else : ?>
            <tr bgcolor="red">
        <?php endif; ?>
         <tr>
             <?php for( $j = 1; $j <= 10; $j++ ) { ?>
                <td><?php echo "$i, $j;" ?></td>
            <?php } ?>
         </tr>
         <?php endfor(); ?>


    


    </table>
</body>







</html>