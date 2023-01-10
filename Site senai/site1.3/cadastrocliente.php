<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_cliente = "INSERT INTO cliente (nome, sobrenome, email, senha) VALUES ('$nome','$sobrenome', '$email','$senha')";
$resultado_cliente = mysqli_query($conexao, $result_cliente);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: mensagemcadastrocliente.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: mensagemcadastrocliente.php");
}

?>
