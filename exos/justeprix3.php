<?php
//Initialisation des variables
$Restart = "Oui";


//Saisie des prix minimum et maximum et attribution random du prix à trouver
while ($Restart == "Oui") {


    $NombreJuste = intval(0);
    $Essais = intval(1);
    $EssaisMax = intval(5);
    $Choix = intval(0);


    echo " BIENVENUE AU JUSTE PRIX ! \n";
    echo "1 - Juste Prix avec choix des valeurs minimum et maximum.\n";
    echo "2 - Juste Prix en aléatoire (entre 1 et 100).\n";
    $Choix = intval(readline("Saisie ton choix : "));
    switch ($Choix) {
        case 1:

            $Essais = intval(1);
            $EssaisMax = intval(5);
            $Choix = intval(0);
            $Min = intval((readline("Veuillez saisir le prix minimum : ")));
            $Max = intval(readline("Veuillez saisir le prix maximum : "));
            $NombreJuste = rand($Min, $Max);


            //Saisie d'un prix
            $Nombre = intval((readline("Saisir un prix entre $Min et $Max : ")));
            //Boucle tant que le prix juste est différent du prix saisi
            while ($Nombre != $NombreJuste) {
                //Boucle tant que le nombre d'essais inférieur au nombre d'essais max
                while ($Essais < $EssaisMax) {
                    //Test si prix saisi est bien compris entre la valeur minimum et la valeur maximum
                    if ($Nombre < $Min || $Nombre > $Max) {
                        echo "Non ! Un nombre entre $Min et $Max j'ai dis !\n";
                    } else if ($Nombre < $NombreJuste) {
                        echo "C'est plus ! \n";
                    } else {
                        echo "C'est moins ! \n";
                    }
                    echo "Retente ta chance ! \nSaisir un prix entre $Min et $Max : ";

                    $Nombre = intval(readline());
                    $Essais++;
                    //Test si prix saisie = juste prix
                    if ($Nombre === $NombreJuste) {
                        echo "Bien joué ! Le prix à trouver était bien $NombreJuste !\n";
                        echo "Tu as trouvé le prix en $Essais essai(s) !\n";
                        break;
                    }
                    //Test si nombre d'essais = nombre essais max
                    if ($Essais === $EssaisMax) {
                        echo "Nombre de tentative maximum atteint !\n";
                        echo "Le juste prix était $NombreJuste.\n";
                    }
                }
                break;
            }
            break;
        case 2:

            $Essais = intval(1);
            $EssaisMax = intval(5);
            $Choix = intval(0);
            $NombreJuste = rand(1, 100);
            //Saisie d'un prix
            $Nombre = intval((readline("Saisir un prix entre 1 et 100 : ")));
            //Boucle tant que le prix juste est différent du prix saisi
            while ($Nombre != $NombreJuste) {
                //Boucle tant que le nombre d'essais inférieur au nombre d'essais max
                while ($Essais < $EssaisMax) {
                    //Test si prix saisi est bien compris entre la valeur minimum et la valeur maximum
                    if ($Nombre < 1 || $Nombre > 100) {
                        echo "Non ! Un nombre entre 1 et 100 j'ai dis !\n";
                    } else if ($Nombre < $NombreJuste) {
                        echo "C'est plus ! \n";
                    } else {
                        echo "C'est moins ! \n";
                    }
                    echo "Retente ta chance ! \nSaisir un prix entre 1 et 100 : ";

                    $Nombre = intval(readline());
                    $Essais++;
                    //Test si prix saisie = juste prix
                    if ($Nombre === $NombreJuste) {
                        echo "Bien joué ! Le prix à trouver était bien $NombreJuste !\n";
                        echo "Tu as trouvé le prix en $Essais essai(s) !\n";
                        break;
                    }
                    //Test si nombre d'essais = nombre essais max
                    if ($Essais === $EssaisMax) {
                        echo "Nombre de tentative maximum atteint !\n";
                        echo "Le juste prix était $NombreJuste.\n";
                    }
                }
                break;
            }
            break;

        default;
            echo "J'ai dis entre 1 et 2 ! \n";
            break;
    }
    echo "Voulez vous recommencer ? (Oui ou Non)\n";
    $Restart = readline();
    if ($Restart == "Non") {
        echo "Ok bah salut !";
    }
}
