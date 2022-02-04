<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PAGE DE CONNEXION</title>
</head>
<body>
    <h1>Se connecter</h1>
    <form action="action.php" method="post">
        <div>
            Nom : <input type="text" name="name">
        </div><br>
        <div>
            Email : <input type="email" name="email">
        </div><br>
        <div>
            Mot de passe : <input type="password" name="pwd">
        </div><br>
        <input type="hidden" name="page_from" value="login">
        <input type="submit" value="Envoyer">
    </form>
    <p>Vous n'avez pas de compte <a href="register.php">inscrivez vous en cliquant ici</a></p>
</body>
</html>