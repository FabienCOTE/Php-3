<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
        </div>
        <div>
            <?php for ($i = 200; $i >= 0; $i -= 12) { ?>
            <p><?= $i; ?> - Enfin !!!</p>
            <?php } ?>
        </div>
    </body>
</html>