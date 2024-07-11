<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 libre PHP 1</title>

    <style>
        p {
            font-weight : lighter;
        }
    </style>
    
</head>
<body>

<h1>Exercice 2 : Afficher les nombres pairs</h1>

<p>Créer un script PHP qui affiche tous les nombres pairs entre 1 et 20.</p>
    <?php

    // CREER UN TABLEAU COMPRENANT 20 NOMBRES (1 A 20)
    $tabNombres = array();
    for ($i = 1; $i <= 20; $i++) {
        $tabNombres[] = $i;
    }


    // AFFICHER LES NOMBRES PRESENTS DANS LE TABLEAU
    foreach ($tabNombres as $nombre) {
        $nombre . "<br>";
    }

    // CREER UN 2EME TABLEAU TRIANT/SELECTIONNANT UNIQUEMENT LES NOMBRES PAIRS
    $nombresPairs = array_filter($tabNombres, function($nombre){
        return $nombre % 2 == 0;
    });
        
    // AFFICHER LES NOMBRES PAIRS
    foreach ($nombresPairs as $nombre) {;
    echo $nombre . " ";
}
    ?>
</body>
</html>