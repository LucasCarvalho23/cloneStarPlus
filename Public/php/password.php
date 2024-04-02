<?php 

    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Entrar | Star+</title>

</head>
<body>

    <div class="container container-fluid container-login">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                
                <img src="../../Private/image/starplus-logo.png" width="170px" title="Logo">

                <h3 class="h3-login-class"><strong>Digite a senha</strong></h3>

                <form action = "../../Private/php/checklogin.php" method="post">

                    <input type="password" placeholder="Senha" class="form-control" name="password">
                    <div class="container-maiuscula-class"><span class="maiuscula-class">(maiúsculas e minúsculas)</span></div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn button-continuar"><span>ENTRAR</span></button>
                    </div>

                </form>

                <?php if (isset($_SESSION['error'])) {  ?>
                    <p class="text-white">
                        <?php 
                            echo $_SESSION['errorPass'];
                        ?>
                    </p>
                <?php } ?>

                <div class="container-esqueceuSenha-class">
                    <a href="./esqueciSenha.php">Esqueceu a senha?</a>
                </div>

            </div>
        </div>
    </div>

    <footer class="container-fluid container-login-footer">
        <div class="container d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-6">

                    <img src="../../Private/image/starplus-logo.png" width="75px" class="m-4">

                    <div class="container container-fluid mb-3">
                        <div class="row justify-content-center">

                            <div class="col-3 p-footer-class"><a href="https://www.starplus.com/pt-br/legal/pol%C3%ADtica-de-privacidade" target="__blank">Política de Privacidade</a></div>
                            <div class="col-4 p-footer-class"><a href="https://www.starplus.com/pt-br/legal/prote%C3%A7%C3%A3o-de-dados-no-brasil" target="__blank">Proteção de Dados no Brasil</a></div>
                            <div class="col-3 p-footer-class"><a href="https://www.starplus.com/pt-br/legal/prote%C3%A7%C3%A3o-de-dados-no-brasil" target="__blank">Contrato de Assinatura</a></div>
                            <div class="col-1 p-footer-class"><a href="https://help.starplus.com/" target="__blank">Ajuda</a></div>

                        </div>
                    </div>

                    <div class="container container-fluid mb-3">
                        <div class="row justify-content-center">
                            
                            <div class="col-3 p-footer-class"><a href="https://help.starplus.com/starplus_hc?id=starplus_article_content&article=supported-devices" target="__blank">Dispositivos Compatíveis</a></div>
                            <div class="col-2 p-footer-class"><a href="https://help.starplus.com/starplus_hc?id=starplus_article_content&article=getting-started" target="__blank">Sobre Star+</a></div>
                            <div class="col-3 p-footer-class"><a href="https://preferences-mgr.trustarc.com/?pid=disney01&aid=disneyplus01&type=disneyplus" target="__blank">Anúncios personalizados</a></div>
                            
                        </div>
                    </div>

                    <div class="container container-fluid mb-3">
                        <div class="row justify-content-center">
                            <div class="col-9">
                                
                                <p class="p-footer-class">Star+ é um serviço pago, baseado em assinatura e sujeito a termos e condições. O serviço Star+ é comercializado por The Walt Disney Company (Brasil) Ltda., World Trade Center, Av. Das Nações Unidas, 12.551, 12.555, 12.559, Piso 10, São Paulo/SP - CEP 04578-903, Brasil e CNPJ/M 73.042.962/0004-20</p>
                                <p class="p-footer2-class">&copy Disney. Todos os direitos reservados.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>