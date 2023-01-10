<!DOCTYPE html>
<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAPILOGIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilologin.css">
        <link rel="stylesheet" href="estilologingrnt.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

    </head>
    
    <body>

            <div id="main-container">

                <div id="divlogo">

                 <img id="logo" src="img/logo.png">

                </div>

                <h1>Entre na sua conta para acessar o sistema como gerente!</h1>

                <form id="register-form" action="">

                <div class="full-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                </div>

                <div class="half-box spacing">
                    <label for="senha">Digite sua senha</label>
                    <input type="text" name="senha" id="senha" placeholder="Digite sua senha">
                </div>

                <div id="texto">

                    <p>Ainda não tem uma conta?<a href="cadastro.php">Crie uma</a> 

                </div>

                <div class="container">

                            <button href="opcoesgrnt.php" type="submit" class="btn btn-dark" value="ENTRAR">ENTRAR</button>

                </div>

                <div class="container2">

                           <a href="opcoesgrnt.php" class="btn btn-dark">LISTAR</a>

                </div>
                
             </div>

            </form>

    </body>
</html>