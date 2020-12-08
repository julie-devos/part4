<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 4-Partie 4</title>
</head>
<body>
<?php
function comparison($number1,$number2){
    if ($number1>$number2){?>
        <p><?="$number1 $number2 Le premier nombre est plus grand.";?></p>
 <?php  }
    elseif ($number1<$number2) {?>
        <p><?="$number1 $number2 Le premier nombre est plus petit.";?></p>
 <?php }
    else { ?>
        <p><?="$number1 $number2 Les deux nombres sont identiques.";?></p>

<?php
    }
}
comparison(1,2);
comparison(2,1);
comparison(2,2);
?>


</body>
</html>