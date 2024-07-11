<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Libre PHP</title>

    <style> 
        p{
            font-weight : lighter;
        }
    </style>
</head>
<body>
    
    <h1>Exercice 4 : Afficher les éléments d'un tableau associatif</h1>
    <p>Crée un script PHP qui affiche chaque clé et valeur d'un tableau associatif de pays et de leurs capitales. <br>
    <br>Exemple : <br>
    ["France" => "Paris", "Allemagne" => "Berlin", "Espagne" => "Madrid"].</p>


<?php
$tabPays = ["France", "Allemagne", "Espagne"];
$tabCapital = ["Paris", "Berlin", "Madrid"];
$nbPays = count($tabPays);

echo "Le nombre de Pays enregistré(s) est de : $nbPays<br>";

$nbCap = count($tabCapital);
echo "Le nombre de Capitale(s) enregistrée(s) est de : $nbCap<br>";
?>
</body>
</html>