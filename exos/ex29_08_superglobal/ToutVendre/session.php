<?php
session_save_path("./tmp");
session_start();
// $_SESSION['pseudo'] = "toto";
// $_SESSION['mdp'] = "azerty123";
// print_r(($_SESSION));
// unset($_SESSION['mdp']);
// print_r($_SESSION);
print_r(($_SESSION));
session_destroy();
// redirection
header('location: /bonjour.php');
// print_r(($_SESSION));
