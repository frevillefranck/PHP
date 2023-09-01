<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$mysqli->query("UPDATE entreprise.employes
SET salaire=5000
WHERE id_employes=592;");
echo $mysqli->affected_rows . 'enregistrement(s) affecté(s) par la requête';
