<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1=10;
    $n2=17;
    $n3=0;
    $n=-3;
    $p=2;
    if ($n1%$p==0) {
        echo "10 est pair";
    }
    else{
        echo "10 est impair";
    }
    echo "<br>";


    if ( $n%$p==0){
        echo " 17 est un nombre pair";
    }
    else{
        echo "17 est un nombre impair";
    }
    echo "<br>";
    
    if ( $n3 % $p==0){
        echo "0 est un nombre pair";
    }
    else{
        echo "0 est un nombre impair";
    }
    echo "<br>";
    if ( $n%$p==0){
        echo "-3 est un nombre pair";
    }
    else{
        echo "-3 est un nombre impair";
    }
    
    


?>
</body>
</html>