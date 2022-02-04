<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE D'ENREGISTREMENT</title>
</head>
<body>
    <h1>Enregistrez-vous ici</h1>
    <form action="action.php" method="post">
        <div>
            Nom : <input type="text" name="name" placeholder="Entrer le nom">
        </div><br>
        <div>
            Postnom : <input type="text" name="lastname" placeholder="Entrer le postnom">
        </div><br>
        <div>
            Prenom : <input type="text" name="firstname" placeholder="Entrer le prénom">
        </div><br>
        <div>
            Mot de passe : <input type="password" name="pwd">
        </div><br>
        <div>
            Téléphone : <input type="text" name="numphone" placeholder="Entrer le numéro de téléphone">
        </div><br>
        <div>
            Genre : 
                <select name="gender">
                    <option value="M">Masculin</option>
                    <option value="F">Feminin</option>
                </select>
        </div><br>
        <div>
            Email : <input type="email" name="email"placeholder="Entrer l'addresse mail">
        </div><br>
        <input type="hidden" name="page_from" value="register">
        <input type="submit" value="submit">
    </form>
</body>
</html>