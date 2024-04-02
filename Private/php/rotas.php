<?php 

    if (!isset($_SESSION['autenticacao'])) {
        $_SESSION['autenticacao'] = 0;
        header('Location: ../../Public/php/index.php');
    }


?>