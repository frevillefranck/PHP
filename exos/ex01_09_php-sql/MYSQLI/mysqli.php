<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements
// visualisation de l'objet
echo '<pre>';
print_r($mysqli);
echo '</pre>';
// visualisation des méthodes disponibles
echo '<pre>';
print_r(get_class_methods($mysqli));
echo '</pre>';
