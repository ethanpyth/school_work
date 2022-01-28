
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE DE CONNEXION</title>
</head>
<body>
    <h1>Page de connexion</h1>
    <form action="verify_login.php" method="post">
        <div>
            Nom : <input type="text" name="nom">
        </div><br>
        <div>
            Email : <input type="email" name="email">
        </div><br>
        <div>
            Mot de passe : <input type="password" name="passwd">
        </div><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php session_destroy(); ?> 