<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 8-Partie 4</title>
</head>
<body>
<?php
$number1=rand(1,100);
$number2=rand(1,100);
$number3=rand(1,100);
function add($number1,$number2,$number3){
    $result=$number1+$number2+$number3;
    echo $result;
}
add($number1,$number2,$number3);
?>

</body>
</html>