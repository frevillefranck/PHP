<?php
// Exercice 1
// Ecrire un programme qui demande à l'utilisateur de rentrer
// 15 mots et qui affiche tous les mots saisis
// commençant par la lettre "s"


$LettreRecherchée = "s";
$MotsParS=[];
// for($i=0; $i<6; $i++){
// $Mot = readline("Saisir un mot : ");
// if(!empty($Mot) && strtolower($Mot[0])===$PremiereLettre){
//     $MotsParS[$i] = $Mot;
// }
// }

// foreach($MotsParS as $Mot){
//     echo "$Mot\n";
// }
 for($i=0;$i<6;$i++){
$Mot = readline("Saisir un mot : ");
if(str_starts_with($Mot, $LettreRecherchée)){
    $MotsParS[$i] = $Mot;
}
}
echo "Voici la liste des mots qui commençent par la lettre $LettreRecherchée : ";
foreach($MotsParS as $Mot){
echo "$Mot, ";
}
 

