<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE DE PROFIL</title>
</head>
<body>
    
    <?php 
    session_start();
    echo '<h2> Profil de ' . strtoupper($_SESSION[$_COOKIE['name']]['name']) . ' ' . strtoupper($_SESSION[$_COOKIE['name']]['lastname']) . '</h2>';

    ?>
    <p>Bonjour Mr. <?php echo strtoupper($_SESSION[$_COOKIE['name']]['firstname']) ?></p>
    <p>Voici vos informations : </p>
    <?php
        echo 'NOM : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['name']) . '</strong> <br>
             POSTNOM : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['lastname']) . '</strong> <br>
             PRENOM : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['firstname']) . '</strong> <br>
             MOT DE PASSE : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['pwd']) . '</strong> <br>
             ADRESSE MAIL : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['email']) . '</strong> <br>
             TELEPHONE : <strong>' . strtoupper($_SESSION[$_COOKIE['name']]['numphone']) . '</strong> <br>'
    ?>
</body>
</html>