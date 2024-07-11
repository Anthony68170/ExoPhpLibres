<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 1 Libre</title>

    <style>

        p{
            font-weight : lighter;
        }

    </style>

</head>
<body>
    <h1>Exercice 3 : Calculer la somme des éléments d'un tableau</h1>

    <p>Crée un script PHP qui calcule et affiche la somme des éléments d'un tableau de nombres [2, 4, 6, 8, 10].</p>

<?php
//AFFICHER/CREER LE TABLEAU /PUIS/ INTEGRER LES ELEMENTS
$tabNombres = array(2,4,6,8,10);

//FAIRE LA SOMME DES NOMBRES (DES ELEMENTS) DU TABLEAU
$sommeNb = array_sum($tabNombres);

//FAIRE APPARAITRE LA SOLUTION A L'UTILISATEUR
echo "La somme des nombres du tableau est égale à $sommeNb";

?>

</body>
</html>