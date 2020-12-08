<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 5-Partie 4</title>
</head>
<body>
<?php

function phrase($firstName,$lastName,$age){?>
    <p><?="Bonjour $firstName $lastName, tu as $age ans !"?></p>

    <?php
}
phrase("Devos","Julie",27);
?>

</body>
</html>