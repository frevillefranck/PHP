<?php




if (isset($_GET['pays'])) {
    $pays = $_GET['pays'];
} else if (isset($_COOKIE['pays'])) {
    // echo $_COOKIE['pays'];
    $pays = $_COOKIE['pays'];
} else {
    $pays = 'fr';
    // echo $pays;
}

$expiration = 365 * 24 * 3600;
setcookie("pays", $pays, time() + $expiration);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tout vendre</title>
</head>

<body>
    <?php
    include('components/nav/nav.php')
    ?>
    <ul>
        <li><a href="?pays=fr">Français</a></li>
        <li><a href="?pays=it">Italien</a></li>
        <li><a href="?pays=es">Espagnol</a></li>
        <li><a href="?pays=en">Anglais</a></li>
    </ul>
    <?php
    switch ($pays) {
        case 'fr':
            echo '<p>Bonjour, <br>  Vous visitez actuellement le site en français <br>Effectivement, la sauvegarde du cookie permet de retenir la langue avec laquelle vous naviguer sur le site pour vos prochaines visites. <br>A bientôt.</p>';
            break;
        case 'es':
            echo '<p>¡Hola <br>En este momento está visitando el sitio en español <br>De hecho, la cookie permite la copia de seguridad de conservar el idioma que utilice el sitio para futuras visitas. <br>Pronto.</p>';
            break;
        case 'en':
            echo '<p>Hello <br>You are currently visiting the site in English <br>Indeed, the cookie allows the backup to retain the language that you use the site for future visits. <br>Soon.</p>';
            break;
        case 'it':
            echo '<p>Ciao <br>Si sta attualmente visitando il sito in Italiano <br>Infatti, il cookie consente il backup di mantenere la lingua che si usa il sito per visite future. <br>Presto.</p>';
            break;
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>