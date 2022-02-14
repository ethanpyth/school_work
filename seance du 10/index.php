<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTURATION</title>
</head>
<body>
    <h1>Facturation</h1>
    <form action="action.php" method="post">
        article :
        <label>
            <select name="article">
                <option value="Pantalon">Pantalon</option>
                <option value="Chemise">Chemise</option>
                <option value="Veste">Veste</option>
            </select>
        </label><br><br>
        Quantité :
        <label>
            <input type="number" name="qte">
        </label><br><br>
        <input type="submit" value="Submit">
    </form><hr>
    <table border="1">
        <tr>
            <th>Article</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        <?php

            foreach ($_SESSION['produits'] as $value){

        ?>
                <tr>
                    <td><?php echo $value[0]; ?></td>
                    <td><?php echo $value[2]; ?></td>
                    <td><?php echo $value[1]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                </tr>      
        <?php
            }
        ?>
    </table>
</body>
</html>