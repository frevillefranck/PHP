<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$result = $mysqli->query("SELECT * FROM employes ");
// création du tableau associatif
$employe = $result->fetch_object();
// débogage du tableau
echo "<pre>";
print_r($employe);
echo "<pre>";
// affichage du prénom
// foreach ($employes as $val) {
//     echo "<pre>";
//     echo $val;
//     echo "<pre>";
// }
echo $employe->prenom . '<br>';
