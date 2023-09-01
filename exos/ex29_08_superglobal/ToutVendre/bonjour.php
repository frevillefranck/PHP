<?php
session_save_path("./tmp");
session_start();
if (!isset($_SESSION['pseudo'])) {

    echo 'Pas de pseudo disponible';
} else {

    echo 'Bonjour ' . $_SESSION['pseudo'] . '<br>';
}
