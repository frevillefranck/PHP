<?php

$Prix = 0;
$PrixTotal = 0;
$Somme = 0;
$Paie = 0;
$Monnaie = 0;
$NbrArticle = 0;
$Nbr10 = 0;
$Nbr5 = 0;
$Nbr1 = 0;
$Choix = "Oui";

while ($Choix === "Oui" || $Choix === "oui") {
    echo ("Saisir le prix de l'article : ");
    $Prix = intval(readline());
    $NbrArticle++;
    $PrixTotal = $PrixTotal + $Prix;
    echo "Voulez vous ajouter un article ? (Oui ou Non) \n";
    $Choix = readline();
}
echo "Vous avez $NbrArticle articles pour un total de $PrixTotal euros.\n";
echo "Saisir le montant que vous donnez en euros : ";
$Paie = intval(readline());
$Monnaie = $Paie - $PrixTotal;
echo "On vous doit $Monnaie euros.\n";
$Nbr10 = intval($Monnaie / 10);
$Monnaie = intval($Monnaie % 10);
$Nbr5 = intval($Monnaie / 5);
$Nbr1 = intval($Monnaie % 5);
echo ("Vous récupérez $Nbr10 billets de 10 euros, $Nbr5 billets de 5 euros et $Nbr1 pièces de 1 euros. ");
