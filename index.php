<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-log-reg.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./img/logo/logo01.png" type="image/x-icon">
    <title> GRUPO SAÚDE VITAL - LOGIN </title>
</head>

<body>
    <!--div da box login, com centrarlização e sombra-->
    <div class="loginStyle col-4 offset-4 shadow">
        <!--Imagem do logo dentro da box-->
        <div class="text-center">
            <img src="./img/logo/logo01.png" class="img-fluid" alt="Grupo Vital Logo" width="80%">
        </div>

        <!--Formulario com dois inputs, email e senha-->
        <form action="user.php" method="post">
            <div class="form-group col-8 offset-2">
                <!--input 1, E-mail-->
                <input type="email" class="form-control fst-italic" name="email" id="email"
                    placeholder="Informe seu E-mail" required>
                <br>
                <!--Input 2, senha-->
                <input type="password" class="form-control fst-italic" name="password" id="pass"
                    placeholder="Informe sua Senha" required>
            </div>
            <br>
            <!--div para centralizar o botão "Entrar"-->
            <div class="col-3 offset-5">
                <!--input do Botão-->
                <input type="submit" class="btn btn-danger" value="ENTRAR">
            </div>
        </form>
        <br>
        <!--Hyperlink da pagina register-->
        <div class="text-center">
            <a href="./pages/register.php" class="linkClick" target="_blank"> [ NÃO TEM CONTA? CADASTRE-SE CLICANDO AQUI! ]</a>
        </div>
    </div>
</body>

</html>