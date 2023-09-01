<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$result = $mysqli->query("SELECT * FROM employes ");
// création du tableau associatif
$employes = $result->fetch_assoc();
// débogage du tableau
echo "<pre>";
print_r($employes);
echo "<pre>";
// affichage du prénom
echo $employes['prenom'] . '<br>';
