<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" <title>Tout vendre | get2-test</title>
</head>

<body>
    <?php
    include('components/nav/nav.php');
    if (!empty($_GET)) {
        echo "produit $_GET[produit] <br>";
        echo "couleur $_GET[couleur] <br>";
        echo "prix $_GET[prix] <br><br>";
        echo "taille $_GET[taille] <br><br>";
        echo "Avec l'implode : <br>";
        echo implode('-', $_GET);
        echo "<br><br>Avec le print_r : <br>";
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
    }    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>