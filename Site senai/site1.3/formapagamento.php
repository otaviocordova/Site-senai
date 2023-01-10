<!DOCTYPE html>
<html lang="br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="estiloformapagamento.css" media="screen" />

        <title>Capicompra</title>

    </head>

    <body>
        
        <?php

            include 'header.php'

        ?>

        <div id="metodo1">

                <div class="linkcima">

                    <a class="linkscomprascima" href="cartaomastercard.php">Cartão de Débito</a>

                </div>

                <div class="linkbaixo">

                    <a class="linkscomprasbaixo" href="cartaomastercard.php">Master Card</a>

                </div>
        </div>


        <div id="metodo2">

                <div class="linkcima" >    

                     <a class="linkscomprascima" href="cartaonubank.php">Cartão de Crédito</a>

                </div>

                <div class="linkbaixo">

                    <a class="linkscomprasbaixo" href="cartaonubank.php">Nubank</a>

                </div>
        </div>


         <div id="metodo3">

            <div class="linkcima" >

                    <a class="linkscomprascima" href="boletobancario.php">Via Boleto</a>

            </div>
            
            <div class="linkbaixo">

                    <a class="linkscomprasbaixo" href="boletobancario.php">Boleto Bancário</a>

            </div>

        </div>

        <div class="titulo2">

            <h1>Forma de pagamento</h1>

        </div>

    </body>
</html>
