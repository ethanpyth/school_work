<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
</head>
<body>
    <form action="action.php" method="post">
        <div>
            NOM : <input type="text" name="nom">
        </div><br>
        <div>
            EMAIL : <input type="email" name="email" id="">
        </div><br>
        <div>
            GENRE : 
            <select name="genre" id="">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>