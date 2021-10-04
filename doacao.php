<?php

include("conexao.php");
session_start();
$email = $_SESSION['email'];

# Coleta o id do usuário
$consulta = mysqli_query($conexao, "select * from usuario where email = '$email'");
$dados = mysqli_fetch_array($consulta);
$id = $dados["id_usuario"];



# Coleta as doações nas quais ele está interessado
$bdinteresse = mysqli_query($conexao, "select * from interesse where id_usuario = '$id'");
while ($interesse = mysqli_fetch_array($bdinteresse)){ 
    echo $interesse;
}




# coleta os dados da tabela de doacao
$consultadoacao = mysqli_query($conexao, "select from doacao where id_doacao = '$id_doacao'");

# Coleta dos dados do outro usuário

$id_vendedor = $consultadoacao["id_usuario"];

?>