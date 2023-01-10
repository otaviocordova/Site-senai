<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

    if(email $$ senha){
        $sql = $pdo->prepare("SELECT * FROM gerente WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() === 0){

        $query = "INSERT INTO gerente (nome, sobrenome, email, senha) VALUES('$nome', '$sobrenome','$email','$senha')";

        mysqli_query($conexao, $query);

        header('location: class_cadastrogerente.php');
        exit;

        }else{
        header("Location: cadastrogerente.php")
        <p>Usuário já cadastrado</p>
        }

}else{
    header("Location: cadastrosuporte.php");
    exit;
}   
?>