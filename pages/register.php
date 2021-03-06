<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-log-reg.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../img/logo/logo01.png" type="image/x-icon">
    <title> GRUPO SAÚDE VITAL - CADASTRO </title>
</head>

<body>
    <!--div da box login, com centrarlização e sombra-->
    <div class="loginStyle col-4 offset-4 shadow">
        <!--Imagem do logo dentro da box-->
        <div class="text-center">
            <img src="../img/logo/logo01.png" class="img-fluid" alt="Grupo Vital Logo" width="80%">
        </div>

        <!--Formulario com inputs e checkbox-->
        <form action="user.php" method="post">
            <div class="form-group col-8 offset-2">

                <div class="row">
                    <!--input 1, Nome-->
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome" required>
                    </div>

                    <!--input 1, Sobrenome-->
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Sobrenome" required>
                    </div>
                </div>

                <br>
                <!--input 1, E-mail-->
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu E-mail"
                        required>
                </div>

                <br>
                <!--Input 2, Senha-->
                <input type="password" class="form-control" name="password" id="pass" placeholder="Informe sua Senha"
                    required>

                <br>
                <!--Input 3, repetir senha-->
                <input type="password" class="form-control" name="re-password" id="re-pass" placeholder="Repetir Senha"
                    required>

                <br>
                <!--Checkbox para escolha da orientação sexual para o cadastro-->
                <div class="form-check form-check-inline offset-2 col-4">
                    <!--Opção 1, Masculino-->
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="opcao1">
                    <label class="form-check-label textPersWhite" for="inlineRadio1">Masculino</label>
                </div>
                <!--Checkbox para escolha da orientação sexual para o cadastro-->
                <div class="form-check form-check-inline">
                    <!--Opção 2, Feminino-->
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="opcao2">
                    <label class="form-check-label textPersWhite" for="inlineRadio2">Feminino</label>
                </div>
            </div>
            <br>


            <!--div para centralizar os botões-->
            <div class="col offset-4">
                <!--input do Botão "ENVIAR"-->
                <input type="submit" class="btn btn-danger" value="ENVIAR">
                <!--input do Botão "LIMPAR"-->
                <input type="reset" class="btn btn-danger" value="LIMPAR">
            </div>
        </form>
        <br>
    </div>
</body>

</html>