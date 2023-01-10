<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_suporte = "INSERT INTO suporte (nome, sobrenome, email, senha) VALUES ('$nome','$sobrenome', '$email','$senha')";
$resultado_suporte = mysqli_query($conexao, $result_suporte);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Suporte cadastrado com sucesso</p>";
	header("Location: mensagemcadastrosuporte.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: mensagemcadastrosuporte.php");
}

?>