<?php 

    session_start();

    function checkSession() {

        $login = 'teste@teste.com.br';

        if (!isset($_SESSION['autenticacao']) || $_POST['login'] != $login) {
            $_SESSION['autenticacao'] = 0;
            header('Location: ../../Public/php/login.php');
            $_SESSION['error'] = 'Email errado. Insira o e-mail correto.';
        }

        if ($_POST['login'] == $login) {
            $_SESSION['autenticacao'] = 1;
            header('Location: ../../Public/php/password.php');
        }

    }

    checkSession();


?>