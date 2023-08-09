<?php
// Exercice 1
// Ecrire un programme qui demande à l'utilisateur de rentrer
// 15 mots et qui affiche tous les$Mots saisis
// commençant par la lettre "s"


$PremiereLettre = "s";
$MotsParS=[];
for($i=0; $i<6; $i++){
$Mot = readline("Saisir un mot : ");
if(!empty($Mot) && strtolower($Mot[0])===$PremiereLettre){
    $MotsParS[$i] = $Mot;
}
}

foreach($MotsParS as $Mot){
    echo "$Mot\n";
}


