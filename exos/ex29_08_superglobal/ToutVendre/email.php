<?php
if (!empty($_POST)) {
    // affichage des saisies du formulaire
    echo "Expéditeur : $_POST[expediteur] <br>";
    echo "Nom : $_POST[nom] <br>";
    echo "Prénom : $_POST[prenom] <br>";
    echo "Société : $_POST[societe] <br>";
    echo "Sujet : $_POST[sujet] <br>";
    echo "Message : $_POST[message] <br>";
    // entête
    $headers = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
    $headers .= 'Reply-To: ' . $_POST['expediteur'] . "\n";
    $headers .= 'From: "' . '"<' . $_POST['expediteur'] . '>' . "\n";
    $headers .= 'Delivered-to: contact@christophe-le-goff.com' . "\n";

    mail('contact@christophe-le-goff.com', $_POST['sujet'], $_POST['message'], $headers);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body>
    <?php include('./components/nav/nav.php') ?>
    <form method="post" action="">
        <label for="nom">Nom</label><br>
        <input name="nom" id="nom" placeholder="nom" type="text"><br><br>
        <label for="prenom">Prenom</label><br>
        <input name="prenom" id="prenom" placeholder="prenom" type="text"><br><br>
        <label for="societe">Société</label><br>
        <input name="societe" id="societe" placeholder="societe" type="text"><br><br>
        <label for="expediteur">Expediteur</label><br>
        <input type="text" name="expediteur" id="expediteur" placeholder="expediteur"><br><br>
        <label for="sujet">Sujet</label><br>
        <input type="text" name="sujet" id="sujet" placeholder="sujet"><br><br>
        <label for="message">Message</label><br>
        <textarea name="message" placeholder="message"></textarea><br><br>
        <input type="submit" value="envoyer l'email">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>