<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
        </div>
        <div>
            <?php for ($i = 20; $i >= 0; $i--) { ?>
            <p><?= $i; ?> C'est presque bon</p>
            <?php } ?>
        </div>
    </body>
</html>