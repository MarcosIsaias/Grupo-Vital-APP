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
    <title>GRUPO SAÚDE VITAL</title>
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
                    <!--Grid, dos 3 principais operações da aplicação [I.M.C, I.A.C e P.H]-->
                    <div class="row offset-2 col-8 text-center">
                        <!--Primeiro Box, calculo I.M.C-->
                        <div class="box col-sm z-depth-2">
                            <img src="../img/btn/i.m.c.png" alt="imagem do botão I.M.C">
                            <a href="../pages/imc.php" class="text-link">Calcular I.M.C</a>
                        </div>
                        <!--Segundo Box, calculo I.A.C-->
                        <div class="box col-sm offset-sm-1 z-depth-2">
                            <img src="../img/btn/i.a.c.png" alt="imagem do botão I.A.C">
                            <a href="../pages/iac.php" class="text-link">Calcular I.A.C</a>
                        </div>
                        <!--Terceiro Box, calculo P.H-->
                        <div class="box col-sm offset-sm-1 z-depth-2">
                            <img src="../img/btn/p.h.png" alt="imagem do botão P.H">
                            <a href="../pages/ph.php" class="text-link">Calcular P.H</a>
                        </div>
                    </div>

                    <!--Grid de Informações sobre as operações-->
                    <div class="row col-10 offset-1 text-center">
                        <!--Box I , Informação sobre o I.M.C-->
                        <div class="boxInfomation exclamation col-sm">
                            <h6 class="title">I.M.C<br>
                                (Indice de Massa Corporal)
                            </h6>
                            <p class="description">
                                Operação matematica que permite ao usuario saiba sua taixa de gordura de forma generica,
                                com base na sua altura e peso.
                            </p>
                        </div>

                        <!--Box II , Informação sobre o I.A.C-->
                        <div class="boxInfomation exclamation col-sm offset-sm-1">
                            <h6 class="title">I.A.C<br>
                                (Indice de Adiposidade Corporal)
                            </h6>
                            <p class="description">
                                É um método utilizado para medir a gordura corporal do usuário, utilizando metidas
                                antropométricas.
                            </p>
                        </div>

                        <!--Box III , Informação sobre o P.H-->
                        <div class="boxInfomation exclamation col-sm offset-sm-1">
                            <h6 class="title">P.H<br>
                                (Pesagem Hidrostática)
                            </h6>
                            <p class="description">
                                É um método de pesagem, que serve para determinar grandezas como volume e densidade.
                            </p>
                        </div>
                    </div>

                    <!--Video motivacional-->
                    <div class="text-center">
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/i_rNAFVRBx4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
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