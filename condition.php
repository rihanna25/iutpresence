<?php
$annee_naissance = (int)readline('entrez votre annee de naissance:  ');
$annee_actuelle = ("2025");
$age = $annee_actuelle - $annee_naissance;
echo (" tu as $age ans");
if (" $age >18 ") {
    echo (" statut: majeur");
} else {
    echo ("statut: mineur");
}
