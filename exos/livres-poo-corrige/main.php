<?php

require_once("gestionEleves/Eleve.php");

$eleves = [];
$int = [];
$saisirEleve = "y";
while ($saisirEleve === "y") {
    $eleveSaisi = readline("Saisir un nom d'élève : ");
    $eleve = new gestionEleves\Eleve($eleveSaisi);
    $ajoutNote = "y";
    while (true) {
        $noteSaisi = intval(readline('Saisir une note pour ' . $eleve->getNom() . ' : '));
        $eleve->ajouterNote($noteSaisi, $int);
        $ajoutNote = readline('Voulez-vous saisir une nouvelle note pour ' . $eleve->getNom() . ' ? (y|n) ');
    }
    $eleves[] = $eleve;
    $saisirEleve = readline("Voulez-vous créer un nouvel élève ? (y|n)");
}
foreach ($eleves as $eleve) {
    echo ($eleve);
}
