
<?php

if(!empty($_GET['nome']))
{
    include_once('conexao.php');

    $id = $_GET['nome'];

    $sqlSelect = "SELECT *  FROM cliente WHERE nome=$nome";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM cliente WHERE nome=$nome";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: listarclientes.php');

?>