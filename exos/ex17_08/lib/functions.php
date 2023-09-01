<?php

$eleves = [
    ["nom" => "toto", "moyenne" => 12],
    ["nom" => "tata", "moyenne" => 15],
    ["nom" => "titi", "moyenne" => 18]
];

$fileName = "./sauv/test.csv";
$headers = array("nom", "moyenne");

createFile($eleves, $fileName, $headers);
function createFile($eleves, $fileName, $headers)
{
    $fp = fopen($fileName, "w");
    fputcsv($fp, $headers, ",");
    $eleves = (array) $eleves;
    foreach ($eleves as $eleve) {
        // Attention $eleve DOIT être un tableau
        fputcsv($fp, $eleve, ",");
    }
}
