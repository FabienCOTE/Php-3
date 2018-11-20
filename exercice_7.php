<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
        </div>
        <div>

            <?php
            for ($i = 1; $i <= 100; $i += 15) {
            ?>
                <p><?= $i; ?> - On tient le bon bout</p>
            <?php
            }
            ?>
        </div>
    </body>
</html>