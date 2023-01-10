<!DOCTYPE html>
<html lang="br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilocartoes.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

        <title>Capicontas</title>

    </head>

    <body>

        <div id="main-container">

        <form id="register-form" method="post" action="class_mastercard.php">

            <div id="divlogo">

                <img id="logo" src="img/logo.png">

            </div>

            <h1>Coloque seus dados bancarios</h1>
            

            <div class="primeiroformulario">
                

                <label for="email">Numero cartão</label>
                <input type="number" name="numero_cartao" id="Numero cartão" placeholder="Digite o numero do cartão" required="">

            </div>

            <div class="segundoformulario">

                <label for="senha">Digite sua senha</label>
                <input type="text" name="senha" id="senha" placeholder="Digite sua senha do cartão" required="">

            </div>

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-3">
                    <button href="finalcompra.php" type="submit" class="btn btn-dark" value="comprar">COMPRAR</button>
                    </div>

                </div>

            </div>

        </div>

        </form>

    </body>
</html>