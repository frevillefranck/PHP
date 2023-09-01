<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nom</label>
        <input required type="text" name="nom">
        <label for="prenom">Prénom</label>
        <input required type="text" name="prenom">
        <label for="ville">Ville</label>
        <input required type="text" name="ville">
        <button>Envoyer</button>
    </form>
    <?php
    // print_r($_POST);
    if(isset($_POST['nom'])){
        print_r("Le nom saisi est " .$_POST['nom'].".\n");
    }
    if(isset($_POST['prenom'])){
    
        print_r("Le prenom saisi est " .$_POST['prenom'].".\n");
    }
    if(isset($_POST['ville'])){
        print_r("La ville saisie est " .$_POST['ville'].".\n");
    }
    
    ?>
</body>
</html>