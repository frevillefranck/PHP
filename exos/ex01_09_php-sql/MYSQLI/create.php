<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$mysqli->query("INSERT INTO entreprise.employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES('Maxime', 'Dambrine', 'm', 'informatique', '2015-12-25', 6000)");
echo $mysqli->affected_rows . 'enregistrement(s) affecté(s) par la requête';
