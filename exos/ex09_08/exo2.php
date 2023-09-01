<?php
// Exercice 2
// Ecrire un programme qui demande à l'utilisateur de saisir un nombre de mots
// et qui affiche tous les mots saisis
// commençant par la lettre "s"
// 


$PremiereLettre = "s";
$MotsParS=[];
$NombreMots = readline("Saisir le nombre de mots : ");
for($i=0; $i<$NombreMots; $i++){
$Mot = readline("Saisir un mot : ");
if(!empty($Mot) && strtolower($Mot[0])===$PremiereLettre){
    $MotsParS[$i] = $Mot;
}
}
foreach($MotsParS as $Mot){
    echo "$Mot\n";
}


