<?php
session_start();
include_once("conexao.php");

$numero_cartao = filter_input(INPUT_POST, 'numero_cartao', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_mastercard = "INSERT INTO mastercard (numero_cartao, senha) VALUES ('$numero_cartao','$senha')";
$resultado_mastercard = mysqli_query($conexao, $result_mastercard);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Suporte cadastrado com sucesso</p>";
	header("Location: finalcompra.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: finalcompra.php");
}

?>