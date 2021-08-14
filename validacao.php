<?php

$nome = $_POST["nome"];

$email = $_POST["email"];

$senha = $_POST["senha"];

$celular = $_POST["telefone"];

$telefone = $_POST["telefone"];

$cpf = $_POST["cpf"];

$dia = $_POST["dia"];

$mes = $_POST["mes"];

$ano = $_POST["ano"];

$rua = $_POST["rua"];

$bairro = $_POST["bairro"];

$numero = $_POST´["numero"];

$cidade = $_POST["cidade"];

$autorizacao = $_POST["autozizacao"];

if(isset($_POST["donatario"])){
    $donatario = $_POST["donatario"];
}
else {
    $donatario = 0;
}

if (isset($_POST["donatario"])) {
    $doador = $_POST["doador"];
} 
else {
    $doador = 0;
}






?>