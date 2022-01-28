
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start(); 
    $donnees = array('nom' => $_POST['nom'],'email' => 'excellencekawej@gmail.com', 'passwd'=>'ethan0901');
    if(isset($_POST) && $_POST != '' && ($_POST['email'] == $donnees['email'] && $_POST['passwd'] == $donnees['passwd']) ){
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['email'] = $_POST['email'];
        echo '<p>Bonjour ' . $_SESSION['nom'] . ' votre mail est ' . $_SESSION['email'] . ' et bienvenu.</p>';
    }else{
        echo '<p>Veuillez remplir tous les champs</p>';
    }
    
    session_destroy();
    ?>
    <button><a href="login.php">Revenir à la page de connexion</a></button> 
</body>
</html>