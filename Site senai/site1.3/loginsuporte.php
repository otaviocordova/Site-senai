<!DOCTYPE html>
<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAPILOGIN</title>
        <link rel="stylesheet" href="estilologin.css">

    </head>
    
    <body>

            <div id="main-container">

                <div id="divlogo">

                 <img id="logo" src="img/logo.png">

                </div>

                <h1>Entre na sua conta para acessar o sistema como suporte!</h1>

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

                <div id="areaentrar">
                    <a id="entrar" href="home.php">ENTRAR</a>
                </div>
                
             </div>

            </form>

                <script src="scriptcadastro.js"></script>

    </body>
</html>