<?php

include_once("../exces-vitesse/Model/voiture.php");

$choix = "oui";
while ($choix === "Oui" || $choix === "oui") {

    $voiture = new Voiture(
        strval(readline("Saisir la plaque d'immatriculation du véhicule : ")),
        intval(readline("Saisir la vitesse de la voiture (km/h): ")),
        strval(readline("Saisir la marque du véhicule : ")),
        strval(readline("Saisir le nom du conducteur : "))
    );

    $limitationVitesse = intval(readline("Saisir la limitation de vitesse (km/h): "));
    $DiffVitesse = $voiture->getVitesse() - $limitationVitesse;

    if ($voiture->getVitesse() > $limitationVitesse) {
        if ($DiffVitesse < 20) {
            if ($limitationVitesse <= 50) {
                echo "Amende forfaitaire de 135 euros.
Retrait d’1 point sur permis de conduire.\n";
            } else
                echo "Amende forfaitaire de 68 euros.
Retrait d’1 point sur permis de conduire.\n";
        } else if ($DiffVitesse >= 20 && $DiffVitesse < 30) {
            echo "Amende forfaitaire de 135 euros.
Retrait d’1 point sur permis de conduire.\n";
        } else if ($DiffVitesse >= 30 && $DiffVitesse < 40) {
            echo "Amende forfaitaire de 135 euros.
Retrait de 3 points sur permis de conduire.
Suspension de 3 ans du permis de conduire.
Interdiction de conduire certains véhicules à moteur pour 3 ans au plus.
Accomplissement d'un stage de sensibilisation à la sécurité routière.\n";
        } else if ($DiffVitesse >= 40 && $DiffVitesse < 50) {
            echo "Amende forfaitaire de 135 euros.
Retrait de 4 points sur permis de conduire.
Suspension de 3 ans du permis de conduire.
Interdiction de conduire certains véhicules à moteur pour 3 ans au plus.
Accomplissement d'un stage de sensibilisation à la sécurité routière.\n";
        } else if ($DiffVitesse >= 50) {
            echo "Amende de 1500 euros.
Retrait de 6 points sur permis de conduire.
Suspension de 3 ans du permis de conduire (sans sursis ni « permis blanc »).
Interdiction de conduire certains véhicules à moteur pour 3 ans au plus.
Confiscation possible du véhicule si le conducteur en est le propriétaire.
Accomplissement d'un stage de sensibilisation à la sécurité routière.\n";
        }
    } else {
        echo "Aucune infraction.\n";
    }

    $choix = strval(readline("Voulez-vous refaire une saisie ? (oui/non) : "));
}
