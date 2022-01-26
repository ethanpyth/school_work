<?php
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    if ($name != "" && $email != "" && $genre != ""){
        echo 'Bonjour ' . (($genre == 'Masculin') ? 'Monsieur ' : 'Madame ') . $name . ', votre email est ' . $email;
    }else{
        echo 'Veuillez remplir tout les champs';
    }