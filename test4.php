<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $note=14;
    if ($note >=16) {
        echo "Très bien";
    }
    elseif ($note >=14) {
        echo "bien";
    }
    elseif ($note >=12){
        echo "assez-bien";
    }
    elseif ($note>=10){
        echo "passable";
    }
    else{
        echo "refusé";
    }
    echo "<br>";
    $note2=20;
    if ($note2 >=16) {
        echo "Très bien";
    }
    elseif ($note2 >=14) {
        echo "bien";
    }
    elseif ($note2 >=12){
        echo "assez-bien";
    }
    elseif ($note2>=10){
        echo "passable";
    }
    else{
        echo "refusé";
    }

    echo "<br>";

    $note3=9.99;
    if ($note3 >=16) {
        echo "Très bien";
    }
    elseif ($note3 >=14) {
        echo "bien";
    }
    elseif ($note3 >=12){
        echo "assez-bien";
    }
    elseif ($note3>=10){
        echo "passable";
    }
    else{
        echo "refusé";
    }
    
    echo "<br>";

    $note4=-5;
    if ($note4 >=16) {
        echo "Très bien";
    }
    elseif ($note4 >=14) {
        echo "bien";
    }
    elseif ($note4 >=12){
        echo "assez-bien";
    }
    elseif ($note4>=10){
        echo "passable";
    }
    else{
        echo "refusé";
    }
    ?>
</body>
</html>