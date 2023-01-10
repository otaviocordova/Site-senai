<?php
    include_once('conexao.php');

    if(!empty($_GET['nome']))
    {
        $nome = $_GET['nome'];
        $sqlSelect = "SELECT * FROM cliente WHERE nome=$nome";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome']
                $senha = $user_data['senha'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: listarclientes.php');
        }
    }
    else
    {
        header('Location: listarclientes.php');
    }
?>
<!DOCTYPE html>

<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CAPIDASTRO</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilocadastrosupgnt.css">
        <link rel="stylesheet" href="estilocadastrogrnt.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

    </head>

    <body>

        <div id="main-container">

                 <div id="divlogo">

                    <img id="logo" src="img/logo.png">

                 </div>

                    <h1>Cadastre-se para acessar o sistema como gerente!</h1>

                    <form id="register-form" action="class_cadastrosuporte.php" method="post">

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

                            <div class="container">
                                    <div class="col-3">
                                    <button href="loginsuporte.php" type="submit" class="btn btn-dark" value="REGISTRAR">REGISTRAR</button>
                                    </div>
                            </div>
                        </form>
                        </div>

                        <script src="scriptcadastro.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
