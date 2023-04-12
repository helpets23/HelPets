<?php
include('conexaohel.php');
$email =$_POST['email'];
$usuario =$_POST['usuario'];
$criarsenha =md5($_POST['senha']);
$confirsenha =md5($_POST['confirsenha']);

$sql = "INSERT INTO usuarios (email,usuario,criarsenha,confirsenha) 
VALUES ('$email','$usuario','$criarsenha','$confirsenha')";

if(mysqli_query($conexao,$sql)){
        echo ("cadastrado com sucesso");
}
else{
    echo ("Erro ao entrar em contatos".mysqli_connect_error($conexao));
}
mysqli_close($conexao)
?>