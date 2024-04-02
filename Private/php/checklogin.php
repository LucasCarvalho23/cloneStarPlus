<?php 

    session_start();

    if ($_POST['login'] == 'teste') {
        header('Location: ../../Public/php/password.php');
    } else {
        header('Location: ../../Public/php/login.php');
        $_SESSION['error'] = 'Email errado. Insira o e-mail correto.';
    }




?>