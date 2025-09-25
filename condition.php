<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $annee_naissance = 2006;
    $annee_actuelle = 2025;
    $age = $annee_actuelle - $annee_naissance;
    echo " <h1>tu as $age ans</h1> ";
    if ($age >= 18) {
        echo " <h1>statut: majeur</h1> ";
    } else {
        echo " <h1> statut: mineur</h1> ";
    }
    ?>
</body>

</html>