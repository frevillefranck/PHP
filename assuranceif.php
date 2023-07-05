<?php
//-25 ans + permis de - de 2 ans avec accident = refus
//-25 ans + permis de - de 2 ans sans accident = tarif rouge
//-25 ans + permis + de 2 ans ou +25 ans  - sans accident = orange
//-25 ans + permis + de 2 ans ou +25 ans  - 1 accident = rouge
//-25 ans + permis + de 2 ans ou +25 ans  + de 1 accident = refus
//+25 ans + permis + de 2 ans sans accident = vert
//+25 ans + permis + de 2 ans 1 accident = orange
//+25 ans + permis + de 2 ans 2 accident = rouge
//+25 ans + permis + de 2 ans + de 2 accident = refus
// Au bout de 5 ans le rouge devient orange, orange devient vert, le vert devient bleu
$Restart = "oui";
while ($Restart === "oui") {
    echo "Bienvenue à la MASSE IF ! \n";
    $Age = intval(readline("Saisir l'âge du conducteur :\n"));
    $AgePermis = intval(readline("Saisir l'âge du permis :\n"));
    $NbrAccident = intval(readline("Saisir le nombre d'accident :\n"));
    $AnneeFidelite = intval(readline("Saisir le nombre d'année de fidélité :\n"));
    if ($Age < 25) {
        if ($AgePermis < 2) {
            if ($NbrAccident === 0) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif orange.\n";
                } else {
                    echo "Vous êtes en tarif rouge.\n";
                }
            } else {
                echo "Vous êtes refusé.\n";
            }
        } else if ($NbrAccident > 1) {
            echo "Vous êtes refusé.\n";
        } else if ($NbrAccident === 1) {
            if ($AnneeFidelite >= 5) {
                echo "Vous êtes en tarif orange.\n";
            } else {
                echo "Vous êtes en tarif rouge.\n";
            }
        } else if ($AnneeFidelite >= 5) {
            echo "Vous êtes en tarif vert.\n";
        } else {
            echo "Vous êtes en tarif orange.\n";
        }
    } else {
        if ($AgePermis < 2) {
            if ($NbrAccident === 0) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif vert.\n";
                } else {
                    echo "Vous êtes en tarif orange.\n";
                }
            } else if ($NbrAccident === 1) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif orange.\n";
                } else {
                    echo "Vous êtes en tarif rouge.\n";
                }
            } else {
                echo "Vous êtes refusé.\n";
            }
        } else {
            if ($NbrAccident === 0) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif bleu.\n";
                } else {
                    echo "Vous êtes en tarif vert.\n";
                }
            } else if ($NbrAccident === 1) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif vert.\n";
                } else {
                    echo "Vous êtes en tarif orange.\n";
                }
            } else if ($NbrAccident === 2) {
                if ($AnneeFidelite >= 5) {
                    echo "Vous êtes en tarif orange.\n";
                } else {
                    echo "Vous êtes en tarif rouge.\n";
                }
            } else {
                echo "Vous êtes refusé.\n";
            }
        }
    }
    $Restart = readline("Voulez-vous recommencer ? (oui ou non) \n");
    echo "Très bien, à bientôt\n";
}
