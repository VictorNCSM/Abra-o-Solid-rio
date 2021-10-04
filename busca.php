<?php
include("conexao.php");
session_start();

$email = $_SESSION["email"];
$bd = mysqli_query($conexao,"select * from usuario where email = '$email'");
$dados = mysqli_fetch_array($bd);

if($dados["opcao"] == 1){
    m 
}

my_sqli_query($conexao,"select * from doacao where")



?>