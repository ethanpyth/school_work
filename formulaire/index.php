<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        Nom : <input type="text" name="name" placeholder="Entrer le nom"><br>
        Postnom : <input type="text" name="lastname" placeholder="Entrer le postnom"><br>
        Prenom : <input type="text" name="firstname" placeholder="Entrer le prénom"><br>
        Matricule : <input type="text" name="matricule" placeholder="Entrer le matricule"><br>
        Genre : 
        <select name="gender" id="">
            <option value="M">Masculin</option>
            <option value="F">Feminin</option>
        </select><br>
        Promotion : <input type="text" name="promotion" placeholder="Entrer la promotion"><br>
        Email : <input type="email" name="email"placeholder="Entrer l'addresse mail"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
