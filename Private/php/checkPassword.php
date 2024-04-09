<?php 

    session_start();    

    function checkSession() {

        $password = '123';

        if (!isset($_SESSION['autenticacao'])) {
            $_SESSION['autenticacao'] = 0;
            header('Location: ../../Public/php/login.php');

        } else if ($_POST['password'] != $password) {
            $_SESSION['autenticacao'] = 1;
            header('Location: ../../Public/php/password.php');
            $_SESSION['errorPass'] = 'Senha errada. Tente novamente.';
        }

        if ($_POST['password'] == $password) {
            $_SESSION['autenticacao'] = 2;
            header('Location: ../../Public/php/profile.php');
        }
        

    }

    checkSession();

?>