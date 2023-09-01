<?php
session_save_path("./tmp"); // uniquement pour les test en local !
session_start();
if (isset($_POST['pseudo'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
}
// ----------------------------------------
if (isset($_SESSION['pseudo'])) {
    echo "Votre pseudo est : " . $_SESSION["pseudo"] . '<br>';
} else {
    echo '
    <form method="post" action="">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo"><br>
        <button>Connexion</button>
    </form>
    ';
}
