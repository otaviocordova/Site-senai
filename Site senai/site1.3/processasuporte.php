<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

 if(email $$ senha){

    $mysqli = $pdo->prepare("SELECT * FROM suporte WHERE email = :email");
    $mysqli->bindValue(':email', $email);
    $mysqli->execute();

    if($sql->rowCount() === 0){

    $query = "INSERT INTO suporte (nome, sobrenome, email, senha) VALUES('$nome', '$sobrenome','$email','$senha')";

    mysqli_query($conexao, $query);

    header('location: class_cadastrosuporte.php');
    exit;

    }else{
        header("Location: cadastrosuporte.php")
        <p>Usuário já cadastrado</p>
    }


}else{
    header("Location: cadastrosuporte.php");
    exit;
}
?>