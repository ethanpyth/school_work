<?php
    session_start();
    $_SESSION['kawej'] = array(
        'name' => 'kawej',
        'lastname' => 'a mbay',
        'firstname' => 'excellence',
        'email' => 'excellencekawej@gmail.com',
        'pwd' => 'hiram',
        'numphone' => '+243999943316',
        'gender' => 'Masculin'
    );

    if(isset($_POST)) {
        if ($_POST['page_from'] == 'register') {
            if(
                !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) &&
                !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['numphone']) &&
                !empty($_POST['gender'])
            ){
                if(!isset($_SESSION[$_POST['name']])){
                    $_SESSION[$_POST['name']] = array(
                        'name' => $_POST['name'],
                        'lastname' => $_POST['lastname'],
                        'firstname' => $_POST['firstname'],
                        'email' => $_POST['email'],
                        'pwd' => $_POST['pwd'],
                        'numphone' => $_POST['numphone'],
                        'gender' => $_POST['gender']
                    );
                    setcookie('name', $_POST['name'], time() + 24 * 3600);
                    header('Location: profile.php');
                }else{
                    include_once('login.php');
                    echo 'Pas besoin de vous inscrire, vous avez déjà un compte. Connectez-vous.';
                }
            }else{
                include_once('register.php');
                echo 'Veuillez remplir tous les champs';
            }
        }elseif($_POST['page_from'] == 'login') {
            if (!isset($_SESSION[$_POST['name']])){
                header('Location: register.php');
            }else{
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pwd'])){
                    if ((
                        $_SESSION[$_POST['name']]['name'] == $_POST['name'] &&
                        $_SESSION[$_POST['name']]['email'] == $_POST['email'] &&
                        $_SESSION[$_POST['name']]['pwd'] == $_POST['pwd']
                    )
                    ) {
                        setcookie('name', $_POST['name'], time() + 24 * 3600);
                        header('Location: profile.php');
                    } else {
                        header('Location: login.php');
                    }
                }else{
                    include_once('login.php');
                    echo 'Veuillez remplir tous les champs';
                }
            }
        }
    }else{
        header('Location: login.php');
    }