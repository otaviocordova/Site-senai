<!DOCTYPE html>
<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAPILOGIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilologin.css">
        

        

    </head>
    
    <body>

            <div id="main-container">

                <div id="divlogo">

                 <img id="logo" src="img/logo.png">

                </div>

                <h1>Entre na sua conta para acessar o sistema!</h1>

                <form id="register-form" method="post" action="processalogincliente.php">

                <div class="full-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required="">
                </div>

                <div class="half-box spacing">
                    <label for="senha">Digite sua senha</label>
                    <input type="text" name="senha" id="senha" placeholder="Digite sua senha" required="">
                </div>

                <div id="texto">

                    <p>Ainda não tem uma conta?<a href="cadastro.php">Crie uma</a> 

                </div>

                <div class="container">

                    <button href="opcoesgrnt.php" type="submit" class="btn btn-dark" value="ENTRAR">ENTRAR</button>

                </div>

            </form>

                <script src="scriptcadastro.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>