<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$result = $mysqli->query("SELECT * FROM employes ");
// création du tableau associatif
$employes = $result->fetch_all();
// débogage du tableau
echo "<pre>";
print_r($employes);
echo "<pre>";
// affichage du prénom
// foreach ($employes as $val) {
//     echo "<pre>";
//     echo $val;
//     echo "<pre>";
// }
echo $employes[2][1] . '<br>';
