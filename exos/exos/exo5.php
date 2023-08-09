<?php
// Exercice 5
// Ecrire un programme qui demande à l'utilisateur de rentrer
// 15 mot et qui affiche tous les mots saisis
// qui contiennent la lettre "s"
// affiché par ordre alphabétique


$MotsParS=[];
$NombreMots = readline("Saisir le nombre de mots : ");
$LettreRecherchée = readline("Saisir la lettre recherchée : ");
for($i=0; $i<$NombreMots; $i++){
$Mot = readline("Saisir le mot ".$i+1 ." : ");
if(strpos($Mot, $LettreRecherchée)!==false){
             $MotsParS[$i] = $Mot;
        }
}
sort($MotsParS);
echo "Voici la liste des mots qui commençent par la lettre $LettreRecherchée, triée par ordre alphabétique : ";
foreach($MotsParS as $Mot){
    echo "$Mot, ";
}
