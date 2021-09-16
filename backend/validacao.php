<?php

include("cd ..\conexao.php");

$nome = $_POST["nome"];

$email = $_POST["email"];

$senha = $_POST["senha"];

$celular = $_POST["telefone"];

    if (isset($_POST["telefone"])) {
        # valida se o telefone tem mais de 10 caracteres, se tiver, o 
        if (strlen($_POST["telefone"]) < 10) {
            echo "O número de telefone que você inseriu é muito curto. Por favor, <a href='formcadastro.html'>volte à página de cadastro</a>.";
        } else {
            $telefone = $_POST["telefone"];
        }
    }

    if(isset($_POST["cpf"]){
        $cpf = $_POST["cpf"];
    }
    else{
        $cpf = 0;
    }

$dia = $_POST["dia"];

$mes = $_POST["mes"];

$ano = $_POST["ano"];

$rua = $_POST["rua"];

$bairro = $_POST["bairro"];

$numero = $_POST´["numero"];

$cidade = $_POST["cidade"];

    if (isset($_POST["donatario"])) {
        $donatario = $_POST["donatario"];
    } else {
        $donatario = 0;
    }

    if (isset($_POST["doador"])) {
        $doador = $_POST["doador"];
    } else {
        $doador = 0;
    }

    # se o donatário for ativo, a opção será igual a zero
    if(!($donatario == 0)){
        $opcao = 0;
    }
    else{
        # se ele não for ativo, a opção será igual a um, que é o número para doador

        $opcao = 1;
    } 

$autorizacao = $_POST["autozizacao"];




# mysqli_query($conexao, "insert into usuario(nome,email,senha,celular,telefone_fixo,cpf,dia,mes,ano,rua,bairro,numero,cidade,cep,opcao,autorizacao) values('$nome','$email','$senha','$celular','$telefone','$cpf','$dia','$mes','$ano','$rua','$bairro','$numero','$cidade','$opcao','$autorizacao')");

# echo "O formulário foi enviado com sucesso. <a href='index.html'>Voltar à página inicial</a>.";




?>