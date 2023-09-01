<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selectionner un jour : 
    <select>
            <?php
        for($i=0;$i<32;$i++){
            echo "<option>$i</option>";
        }



        ?>
        
    </select>
    </br>
    <table>
    <?php
    $compteur=0;
    for($i=0; $i<100; $i++){
        echo "<td>$i";
        $compteur++;
        if($compteur===10){
            echo"</tr>";
            $compteur=0;
        }
        
    }
    ?>
    </table>
    
</body>
</html>