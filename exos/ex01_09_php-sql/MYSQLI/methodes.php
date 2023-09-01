<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements
$mysqli->query("Mauvaise requête volontaire ........");
echo $mysqli->error . "<br>";
