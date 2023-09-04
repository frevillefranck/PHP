<?php
// connexion à notre BDD "securite"
$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'db_user', '5C5zcqd5', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$date = date("Y-m-d H:i:s");

$result = $pdo->query("SELECT * FROM commentaire");
// $com = $result->fetch(PDO::FETCH_OBJ);
while ($coms = $result->fetch(PDO::FETCH_ASSOC)) {


    echo "Pseudo : $coms[pseudo]<br>";
    // echo "Date d'enregistrement : $coms[date_enregistrement]<br>";
    echo "Message : $coms[message]<br><br>";
}


if (!$_POST) {
    echo "ERREUR";
} else {
    $resultat = $pdo->exec("INSERT INTO dialogue.commentaire (pseudo, message, date_enregistrement) VALUES ('$_POST[pseudo]', '$_POST[message]', '$date' )");
}

?>

<form method="post" action="">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo"><br><br>
    <label for="message">Message</label><br>
    <textarea name="message" id="message"></textarea><br><br>
    <input type="submit"><br><br>
</form>