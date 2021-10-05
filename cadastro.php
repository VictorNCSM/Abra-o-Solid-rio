<?php

include("conexao.php");

$nome = $_POST["nome"];

$email = $_POST["email"];

$senha = $_POST["senha"];


# =====================================================================
if (isset($_POST["cpf"])) {
    $cpf = $_POST["cpf"];
} 
else{
    $cpf = 0;
}

# ===================================================
$celular = $_POST["celular"];

if (strlen($senha) < 8){
    echo "Sua senha é muito curta, volte à <a href='formcadastro.html'>página de cadastro</a> e se cadastre.";
} 
elseif (strpos($email, "@") == "") {
    echo "O E-mail inserido não é um e-mail válido. <a href='formcadastro.html'>Voltar ao formulário</a>.";
} 
elseif (strpos($email, ".com") == "") {
    echo "O E-mail inserido não é um e-mail válido. <a href='formcadastro.html'>Voltar ao formulário</a>.";
} 
elseif (isset($_POST["telefone"])) {
    # valida se o telefone tem mais de 10 caracteres, se tiver, o 
    if (strlen($_POST["telefone"]) < 10) {
        echo "O número de telefone que você inseriu é muito curto. Por favor, <a href='formcadastro.html'>volte à página de cadastro</a>.";
    } 
    else{
        $telefone = $_POST["telefone"];
    }
}

$dia = $_POST["dia"];

$mes = $_POST["mes"];

$ano = $_POST["ano"];

$rua = $_POST["rua"];

$bairro = $_POST["bairro"];

$numero = $_POST["numero"];

$cidade = $_POST["cidade"];

$cep = $_POST["cep"];


    # salvamento das variáveis de donatário e doador
    if ((!isset($_POST["doador"]))) {
        $doador = true;
    } 
    else {
        $doador = false;
    }

    if ((!isset($_POST["donatario"]))) {
        $donatario = true;
    } else {
        $donatario = false;
    }


    # se o donatário for ativo, a opção será igual a zero
    if($donatario == true){
        $opcao = 0;
    }
    else{
        $opcao = 1;
    }
    # Doador: opção = 1;
    # Donatário, opção = 0.

    # se ele não for ativo, a opção será igual a um, que é o número para doador
        
$autorizacao = $_POST["autorizacao"];

$consulta = mysqli_query($conexao,"select * from usuario where email = '$email'");

$usuario = mysqli_fetch_array($consulta);

if ($usuario["id_usuario"] == false) {
    mysqli_query($conexao, "insert into usuario(nome,email,senha,celular,telefone_fixo,cpf,dia,mes,ano,rua,bairro,numero,cidade,cep,opcao,autorizacao) values('$nome','$email','$senha','$celular','$telefone','$cpf','$dia','$mes','$ano','$rua','$bairro','$numero','$cidade','$cep','$opcao','$autorizacao')");

    echo "O formulário foi enviado com sucesso. <a href='index.html'>Voltar à página inicial</a> ou <a href='login.html'>Ir à página de login</a>.";
} else {
    echo "Você já está cadastrado em nosso site. Por favor, <a href='login.html'>logue-se</a>.";
}
?>