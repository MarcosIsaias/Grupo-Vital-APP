<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="shortcut icon" href="../img/logo/logo01.png" type="image/x-icon">
    <title>CÁLCULO IAC</title>
</head>

<body class="backgroundOrange">
    <!--bodySection, box do template do site-->
    <div class="bodySection">
        <!--adjust, ajuste do padding interno dos elementos dentro da box-->
        <div class="adjust">
            <!--cabeçario-->
            <header>
            </header>
            <!--mt-3, margin top dos elementos internos-->
            <div class="mt-3">
                <!--Menu de informações do usuário-->
                <section class="text-center">
                    <!--Imagem do avatar do usuário-->
                    <img src="../img/avatar/avatar01.jpg" class="circle responsive-img"
                        alt="Imagem do avatar do usuário" width="40%">
                    <!--Informações pessoais, como nome, gênero, altura e idade-->
                    <h6>Matheus K. Rother</h6>
                    <br>
                    Masculino
                    <!--logo do genero do usuário-->
                    <img src="../img/genero/masculino.png" alt="Imagem do genero masculino" width="5%">
                    <br>
                    <br>
                    Altura: 1.90 cm
                    <br>
                    <br>
                    Idade: 65 anos
                </section>
                <main>
                    <!--DESENVOLVIDO POR ARTHUR CHAVES - UNS DOS RESPONSAVEIS PELA PARTE DO FRONT-END-->
                    <div class="boxOperation text-center">
                        <h1>I.A.C</h1>
                        <p>[ ÍNDICE DE ADPOSIDADE CORPORAL ]</p>
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <!--Imagem dentro da div-->
                        <div class="col-6">
                            <img src="../img/imc_img/img01.png" alt="imagemImc" height="60%">
                        </div>

                        <!--Criação do formulário-->
                        <div class="col-6">
                            <form>
                                <!--Formulario da altura-->
                                <div class="form-group">
                                    <label for="Altura" class="textPerson">Altura</label>
                                    <input type="number" class="form-control amber darken-4 rounded" id="Altura"
                                        maxlength="4" minlength="4" step="0.01" min="0">
                                </div>

                                <!--Formulario do Quadril-->
                                <div class="form-group">
                                    <label for="quadril" class="textPerson">Quadril (CM)</label>
                                    <input type="number" class="form-control amber darken-4 rounded" id="Quadril"
                                        maxlength="4" minlength="4" step="0.01" min="0">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Botão de Calcular-->
                    <div class="col-6 offset-5">
                        <input type="submit" class="waves-effect waves-light amber darken-4  btn" value="CALCULAR">
                    </div>
                </main>
            </div>
        </div>
        <!--footer personalizado-->
        <footer>
        </footer>
    </div>
</body>

</html>