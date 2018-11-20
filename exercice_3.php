<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.<br />Tant que la première variable n'est pas inférieure à 10 :<br />multiplier la première variable avec la deuxième<br />afficher le résultat<br />décrémenter la première variable</p>
        </div>
        <div>
            <?php
            $number = 100;
            $rand = rand(1, 100);
            while ($number >= 10) {
            ?>
            <p><?= $number * $rand; $number--; ?></p>
            <?php
            }
            ?>
        </div>
    </body>
</html>