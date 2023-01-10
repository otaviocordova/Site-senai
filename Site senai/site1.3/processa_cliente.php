<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO cliente (nome, sobrenome, email, senha) VALUES('$nome', '$sobrenome','$email','$senha')";

mysqli_query($conexao, $query);

header('location: cadastrocliente.php');

?>