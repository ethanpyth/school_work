<?php
    session_start(); 
    $donnees = array('nom' => $_POST['nom'],'email' => 'excellencekawej@gmail.com', 'passwd'=>'ethan0901');
    if(isset($_POST) && $_POST != '' && ($_POST['email'] == $donnees['email'] && $_POST['passwd'] == $donnees['passwd']) ){
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['email'] = $_POST['email'];
        echo '<p>Bonjour ' . $_SESSION['nom'] . ' votre mail est ' . $_SESSION['email'] . ' et bienvenu.</p>';
    }
    $list = array();
    session_destroy();
?>