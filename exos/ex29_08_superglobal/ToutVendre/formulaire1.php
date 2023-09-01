<?php
$message = '';
if (!empty($_POST)) {
    $message .= 'Recuperation des données saisies : <br>';
    $message .= 'ville : ' . $_POST['ville'] . '<br>';
    $message .= 'cp : ' . $_POST['cp'] . '<br>';
    $message .= 'adresse : ' . $_POST['adresse'] . '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" <title>Produit</title>
</head>

<body>
    <?php
    include('components/nav/nav.php');
    ?>
    <div><?php echo $message; ?></div>
    <form method="post" action="">
        <label for="ville">ville</label><br>
        <input type="text" name="ville" id="ville" placeholder="saisir 1 ville"><br><br>
        <label for="cp">code postal</label><br>
        <input type="text" name="cp" id="cp" placeholder="saisir 1 code postal"><br><br>
        <label for="adresse">adresse</label><br>
        <textarea name="adresse" id="adresse" placeholder="saisir 1 adresse"></textarea><br><br>
        <input type="submit">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>