<?php
session_save_path("./tmp");
session_start();
// affichage du timestamp
echo 'Temps actuel : ' . time() . '<br>';
// débogage de la session
print "<pre>";
print_r($_SESSION);
print "</pre>";
// procédure
if (isset($_SESSION['temps'])) {
    if (time() > ($_SESSION['limite'] + $_SESSION['temps'])) {
        session_destroy();
        echo 'deconnexion';
    } else {
        $_SESSION['temps'] = time();
        echo 'connexion mise à jour';
    }
} else {
    echo "connexion";
    $_SESSION['temps'] = time();
    $_SESSION['limite'] = 20;
};
