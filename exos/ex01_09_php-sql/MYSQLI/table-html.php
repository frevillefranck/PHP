<?php
// création de l'objet de connexion
$mysqli = new mysqli("localhost", "db_user", "5C5zcqd5", "entreprise");
// traitements : insertion 
$result = $mysqli->query("SELECT * FROM employes ");
// affichage
echo '<table border="5"><tr>';
while ($colonne = $result->fetch_field()) {
    echo '<th>' . $colonne->name . '</th>';
}
echo '</tr>';
while ($ligne = $result->fetch_assoc()) {
    echo '<tr>';
    foreach ($ligne as $indice => $information) {
        echo ' <td>' . $information . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
