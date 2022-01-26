<?php
    $prix_article = [
        'banane' => 500,
        'orange' => 150,
        'pain' => 200,
        'pizza' => 300
    ];
    if ($_POST){
        $qte = $_POST['qte'] > 0 ? $_POST['qte'] : 0;
        echo "Articles : " . $_POST['article'] . "<br> Quantité : " . $qte . "<br>TOTAL : " . $qte * $prix_article[$_POST['article']];
    }
?>