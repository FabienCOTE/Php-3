<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
        </div>
        <div>
            <?php
            for ($i = 1; $i <= 15; $i++) {
            ?>
            <p><?= $i; ?> - On y arrive presque</p>
            <?php
            }
            ?>
        </div>
    </body>
</html>