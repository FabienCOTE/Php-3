<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
        </div>
        <div>
            <p><?php
                for ($i=20; $i>=0; $i--) {
                    echo $i . ' - C\'est presque bon<br />';
                }
            ?></p>
        </div>
    </body>
</html>