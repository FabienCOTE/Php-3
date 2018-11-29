<!DOCTYPE html>
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
            <?php
            $number = 1;
            while ($number <= 10) {
            ?>
            <p><?= $number; $number *= 1.5; ?></p>
            <?php } ?>
        </div>
    </body>
</html>