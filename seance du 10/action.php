<?php
    session_start();
    $articles = [
        array('nom' => 'Pantalon', 'prix' => '4000'),
        array('nom' => 'Chemise', 'prix' => '3000'),
        array('nom' => 'Veste', 'prix' => '2000')
        ];

    if(isset($_POST) && !empty($_POST['article']) && !empty($_POST['qte'])){
        foreach ($articles as $article){
            if(in_array($_POST['article'], $article)){
                if (!in_array($_SESSION['produits'][], $_POST['article'])){
                    $_SESSION['produits'][] = [
                        $_POST['article'],
                        ($_POST['article'] == $article['nom']) ? $article['prix'] : 0,
                        $_POST['qte'],
                        $_POST['qte'] * $article['prix']
                    ];
                    var_dump($_SESSION);
                    break;
                }else{
//                    $_SESSION['produits'][];
                }
            }
        }

//        header('Location: index.php');
    }