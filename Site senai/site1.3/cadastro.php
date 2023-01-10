<!DOCTYPE html>

<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CAPIDASTRO</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilocadastros.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

    </head>

    <body>

        <div id="main-container">

                 <div id="divlogo">

                    <img id="logo" src="img/logo.png">

                 </div>

                    <h1>Cadastre-se para acessar o sistema!</h1>

                <form id="register-form" action="cadastrocliente.php" method="post">

                    <div class="full-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required="">
                    </div>

                    <div class="half-box spacing">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required="" >
                    </div>

                    <div class="half-box">
                        <label for="ultimonome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" required="">
                    </div>

                    <div class="half-box spacing">
                        <label for="senha">Senha</label>
                        <input type="senha" name="senha" id="senha" placeholder="Digite sua senha" required="">
                    </div>

                    <div class="half-box">
                        <label for="senhadeconfirmacao">Confirmação de senha</label>
                        <input type="password" name="senhadeconfirmacao" id="senhadeconfirmacao" placeholder="Digite novamente sua senha" required="">
                    </div>

                    <div>
                        <input type="checkbox" name="agreement" id="agreement" require="">
                        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
                    </div>

                    <div id="pergunta">
                       <p>Já tem uma conta? clique <a href="login.php">aqui!</p></a>
                    </div>

                    

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-3">
                                <button href="login.php" type="submit" class="btn btn-dark" value="REGISTRAR">REGISTRAR</button>
                                </div>

                            </div>

                        </div>
                
                </form>
            </div>

        <script src="scriptcadastro.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

</html>