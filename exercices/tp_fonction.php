<?php
//exercices 1

function verify_td(array $cotes): bool{
    $sum = 0;
    foreach ($cotes as $value){
        $sum = ($value > 4) ?  $sum + 1 : $sum;
    }
    return $sum == count($cotes);
}

//exercices 2

function prix_total(INT $qte, INT $prix_unit): INT{
    $total = $qte * $prix_unit;
    if($qte > 9){
        $reduction = $total * 10 /100;
        $new_total = $total - $reduction;
    }elseif ($qte > 5 && $qte < 9){
        $reduction = $total * 5 /100;
        $new_total = $total - $reduction;
    }else{
        $new_total = $total;
    }
    return $new_total;
}

//exercice 3

function image(INT $largeur, INT $hauteur): string{
    if ($hauteur == $largeur){
        $type_image = "Carré";
    }elseif ($largeur > $hauteur){
        $type_image = "Paysage";
    }else{
        $type_image = "Portrait";
    }
    return $type_image;
}

$tab = array(1, 5, 8, 5, 6, 7);
$prix = 52;
$qte = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Exercice 1</h3>
    <p>
        Soit un tableau contenant les cotes de td d'un étudiant. Ecrire une fonction qui vérifie s'il a réussi à tous
        les td ou pas.  un td est réussi s'il a une cote supérieure à 4.
    </p>
    <?php
        if(verify_td($tab)){
            echo '<em> il a réussi à tous les td</em>';
        }else{
            echo '<em> il n\'a pas réussi à tous les td</em>';
        }
    ?>
    <h3>Exercice 2</h3>
    <p>
        Ecrire une fonction qui calcule le prix total d'un produit.S'il la quantite est supérierue à neuf , on fera une
        réducvtion de 10%. si la quantité est  entre 5 et 9, on fera une réduction de 5%, sinon on ne fera pas de reduction.
    </p>
    <?php
        echo '<em>Quantité : </em>' . $qte . '<br> <em>Prix unitaire : </em>' . $prix . '<br> <em>Total : <strong>' . prix_total($qte, $prix) . '</strong>';
    ?>
    <h3>Exercice 3</h3>
    <p>
        ecrire une fonction qui prend la largeur et la hauteur d'une image en paramètre et qui vérifie si cette image
        est en portrait, en paysage ou carré
    </p>
    <?php

    ?>
</body>
</html>