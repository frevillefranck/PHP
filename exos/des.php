<?php


$Restart = "Oui";

while ($Restart == "Oui") {

    $Resultat = intval(0);
    $Choix = intval(0);
    echo "----------------------------------------------\n";
    echo "Bienvenue dans le simulateur de lancer de dé !\n";
    echo "Quel dé voulez-vous utiliser ?\n";
    echo "1 - Dé de 6 faces\n";
    echo "2 - Dé de 10 faces\n";
    echo "3 - Dé de 12 faces\n";
    echo "4 - Dé de 100 faces\n";
    echo "---------------------------------------------\n";
    $Choix = intval(readline("Quel est ton choix ? "));
    switch ($Choix) {
        case 1:
            $Resultat = intval(0);
            $Resultat = intval(rand(1, 6));
            if ($Resultat === 1) {
                echo "Bien joué tu as fais une réussite critique !\n";
            } else if ($Resultat === 6) {
                echo "Aie Aie Aie ! C'est un échec critique !\n";
            } else {
                echo "Tu as fais $Resultat !\n";
            }

            break;
        case 2:
            $Resultat = intval(0);
            $Resultat = intval(rand(1, 10));
            if ($Resultat === 1) {
                echo "Bien joué tu as fais une réussite critique !\n";
            } else if ($Resultat === 10) {
                echo "Aie Aie Aie ! C'est un échec critique !\n";
            } else {
                echo "Tu as fais $Resultat !\n";
            }
            break;
        case 3:
            $Resultat = intval(0);
            $Resultat = intval(rand(1, 12));
            if ($Resultat === 1) {
                echo "Bien joué tu as fais une réussite critique !\n";
            } else if ($Resultat === 12) {
                echo "Aie Aie Aie ! C'est un échec critique !\n";
            } else {
                echo "Tu as fais $Resultat !\n";
            }
            break;
        case 4:
            $Resultat = intval(0);
            $Resultat = intval(rand(1, 100));
            if ($Resultat <= 5) {
                echo "Bien joué tu as fais une réussite critique ($Resultat) !\n";
            } else if ($Resultat >= 95) {
                echo "Aie Aie Aie ! C'est un échec critique ($Resultat) !\n";
            } else {
                echo "Tu as fais $Resultat !\n";
            }
            break;
        default;
            echo "Le choix n'est pas correct ! \n";
            break;
    }
    echo "Voulez vous recommencer ? (Oui ou Non)\n";
    $Restart = readline();
}
