<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice libre PHP 1</title>

    <style>
        p {
            font-weight : lighter;
        }
    </style>
    
</head>
<body>

<h1>Exercice 1 : <br>
    Afficher les éléments d'un tableau<h1>
    <p>Crée un script PHP qui affiche chaque élément d'un tableau de fruits (Pomme, Banane, Orange et Fraise).<p>

    <?php
// ENREGISTRER LES FRUITS DANS UN TABLEAU (CONSULTABLE)
$fruits = ["Pomme", "Banane", "Orange", "Fraise"];

// FAIRE APPARAITRE LES ELEMENTS DU TABLEAU (LES FRUITS)
$fruits = ["Pomme", "Banane", "Orange", "Fraise"];

echo "<ul>";
foreach ($fruits as $fruit) {
    
    echo "<li> $fruit <br>";
}

    ?>
</body>
</html>