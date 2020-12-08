<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 7-Partie 4</title>
</head>
<body>
<?php
$age=rand(1,100);
$genderArray= array("Homme", "Femme");
$genderRand= array_rand($genderArray);
$gender= $genderArray[$genderRand];
function phrase($age,$gender){
    if ($age<18 && $gender=="Homme"){
        echo "Vous êtes un homme et vous êtes mineur.";
    }
    elseif ($age>=18 && $gender=="Homme"){
        echo "Vous êtes un homme et vous êtes majeur.";
    }
    elseif ($age<18 && $gender=="Femme"){
        echo "Vous êtes une femme et vous êtes mineur.";
    }
    else {
        echo "Vous êtes une femme et vous êtes majeur.";
    }
}
phrase($age,$gender);
?>

</body>
</html>