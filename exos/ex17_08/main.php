<?php

// require_once("gestionEleves/Eleve.php");

$eleves = [
    ["nom" => "toto", "moyenne" => 12],
    ["nom" => "tata", "moyenne" => 15],
    ["nom" => "titi", "moyenne" => 18]
];
// Création nom de ficher
$fileName = "./sauv/eleves.csv";
//Ressource à créer
$fp = fopen($fileName, "w");
$headers = array("nom", "moyenne");
// Facultatif ! Le header
fputcsv($fp, $headers, ",");
foreach ($eleves as $eleve) {
    // Attention $eleve DOIT être un tableau
    fputcsv($fp, $eleve, ",");
}
// Fermer la ressource en fin de procédure
fclose($fp);
