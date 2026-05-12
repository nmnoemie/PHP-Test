<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre=7;
    echo "table de multiplication de $nombre : <br>";
    for ($i=1 ; $i<=10; $i++){
        $resultat=$nombre*$i;
        echo "$nombre x $i = $resultat<br>";
    }


    ?>
</body>
</html>