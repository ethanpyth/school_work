<?php
if (isset($_POST) && !empty($_POST)){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $matricule = $_POST['matricule'];
    $gender = $_POST['gender'];
    $promotion = $_POST['promotion'];
    $email = $_POST['email'];
    echo "Nom : $name <br> Postnom : $lastname <br> Prenom : $firstname <br> Matricule : $matricule <br> Genre : $gender <br> Promotion : $promotion <br> Email : $email";
} else{
    echo "Désolé ce tableau n'existe pas";
}
