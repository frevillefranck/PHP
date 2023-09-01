<?php
// Exercice 3
// Ecrire un programme qui demande à l'utilisateur de rentrer
// 15 mot et qui affiche tous les mots saisis
// qui contiennent la lettre "s"


$LettreRecherchée = "s";
$MotsParS=[];
$NombreMots = readline("Saisir le nombre de mots : ");
for($i=0; $i<$NombreMots; $i++){
$Mot = readline("Saisir un mot : ");
if(strpos($Mot, $LettreRecherchée)!==false){
             $MotsParS[$i] = $Mot;
        }
}
foreach($MotsParS as $Mot){
    echo "$Mot\n";
}
