<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FACTURATION</title>
</head>
<body>
    <form method="post" action="action.php" id="lign">
        <div class="sizing">
            ARTICLES : 
            <select name="article" id="">
                <option value="banane">Banane</option>
                <option value="orange">Orange</option>
                <option value="pain">Pain</option>
                <option value="Pizza">Pizza</option>
            </select>
        </div><br>
        <div>
            QUANTITE : <input type="number" name="qte">
        </div><br>
        <div>
            <input type="submit" value="Submit">
        </div><br>
    </form>
</body>
</html>