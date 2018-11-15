<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Créer une variable et l'initialiser à 1.<br />Tant que cette variable n'atteint pas 10, il faut :<br />l'afficher<br />l'incrementer de la moitié de sa valeur</p>
        </div>
        <div>
            <p><?php
                $number = 1;
                while ($number < 10) {
                    echo $number . '<br />';
                    $number *= 1.5;
                }
            ?></p>
        </div>
    </body>
</html>