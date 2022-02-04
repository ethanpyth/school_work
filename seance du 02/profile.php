<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PAGE DE PROFIL</title>
</head>
<body>
    
    <?php 
    session_start();
    echo '<h2> Profil de ' . strtoupper($_SESSION[$_COOKIE['name']]['name']) . ' ' . strtoupper($_SESSION[$_COOKIE['name']]['lastname']) . '</h2>';

    ?>
    <p>Bonjour Mr. <?php echo strtoupper($_SESSION[$_COOKIE['name']]['firstname']) ?></p>
    <p>Voici vos informations : </p>
    <div class="lign">
        <p>NOM : <strong> <?php echo strtoupper($_SESSION[$_COOKIE['name']]['name']) ?> </strong> </p>
        <p> POSTNOM : <strong><?php echo strtoupper($_SESSION[$_COOKIE['name']]['lastname']) ?> </strong> </p>
        <p> PRENOM : <strong><?php echo strtoupper($_SESSION[$_COOKIE['name']]['firstname']) ?> </strong></p>
        <p> MOT DE PASSE : <strong> <?php echo strtoupper($_SESSION[$_COOKIE['name']]['pwd']) ?></strong></p>
        <p> ADRESSE MAIL : <strong> <?php echo strtoupper($_SESSION[$_COOKIE['name']]['email']) ?> </strong></p>
        <p> TELEPHONE : <strong> <?php echo strtoupper($_SESSION[$_COOKIE['name']]['numphone']) ?> </strong></p>
    </div>
</body>
</html>