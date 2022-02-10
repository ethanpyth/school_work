<?php
    session_start();
    $_SESSION['kawej'][] = array(
        'name' => 'kawej',
        'lastname' => 'a mbay',
        'firstname' => 'excellence',
        'email' => 'excellencekawej@gmail.com',
        'pwd' => 'hiram',
        'numphone' => '+243999943316',
        'gender' => 'Masculin'
    );

    if(isset($_POST) && !empty($_POST)) {
        if ($_POST['page_from'] == 'register' && !isset($_SESSION[$_POST['name']])) {
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
        }elseif($_POST['page_from'] == 'login') {
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
        }
    }else{
        header('Location: login.php');
    }
    


