<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" <title>Document</title>
</head>

<body>
    <?php
    include('./components/nav/nav.php');
    $nomFichier = "sauvegarde.txt";
    $fichiers = file($nomFichier);
    echo 'Affichage avec print_r()<br>';
    print '<pre>';
    print_r($fichiers);
    print '</pre>';
    // affichage ligne par ligne : boucle
    echo 'Affichage avec une boucle - foreach()<br>';
    foreach ($fichiers as $ligne) {
        echo $ligne . '<br>';
    }
    echo '';
    // affichage du tableau avec un passage à la ligne
    echo 'Affichage avec un implode et retour à la ligne<br>';
    echo implode('<br>', $fichiers);
    ?>
</body>

</html>