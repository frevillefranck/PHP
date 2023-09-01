<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$result = $mysqli->query("SELECT * FROM employes ");
$employes = $result->fetch_assoc();

while ($employes = $result->fetch_assoc()) {
    echo '<pre>';
    // print_r($employes);
    echo '</pre>';

    echo "Bonjour je suis $employes[prenom] du service $employes[service], je touche $employes[salaire] euros par mois.<br>";
}
